document.addEventListener('DOMContentLoaded', function() {
    const calendarEl = document.getElementById('calendar');
    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        dateClick: handleDateClick,
        displayEventTime: true,
    });

    calendar.render();
    displayAllAvailabilities();

    function handleDateClick(info) {
        showModal(info.dateStr);
    }

    function showModal(date) {
        const modalEl = document.getElementById('add-availability-modal');
        const backdropClasses = 'bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40';
        const modal = new Modal(modalEl, {
            backdropClasses: backdropClasses,
            onHide: () => {},
            onShow: () => {
                const datePicker = document.getElementById('availability-datepicker');
                datePicker.value = date;
            },
            onToggle: () => {},
        });
        modal.show();
        document.getElementById('close-availability-modal').addEventListener('click', hideModal);

        const form = document.getElementById('add-availability-form');
        form.addEventListener('submit', handleFormSubmit);

        function handleFormSubmit(event) {
            event.preventDefault();
            const formData = new FormData(form);
            const consultantId = formData.get('consultantId');
            const date = formData.get('date');
            const fromTime = formData.get('fromTime');
            const toTime = formData.get('toTime');
            storeAvailability(consultantId, date, fromTime, toTime);
            form.reset();
        }

        function storeAvailability(consultantId, date, fromTime, toTime) {
            const url = '/admin/availability';
            const headers = {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                    'content'),
            };
            const body = JSON.stringify({
                consultantId: consultantId,
                date: date,
                fromTime: fromTime,
                toTime: toTime,
            });
            fetch(url, {
                    method: 'POST',
                    headers: headers,
                    body: body
                })
                .then((response) => response.json())
                .then((data) => {
                    const event = {
                        id: data.consultantId,
                        title: `${data.start} - ${data.end}`,
                        start: data.date,
                    };
                    calendar.addEvent(event);
                    hideModal();
                    displaySuccessToast();
                })
                .catch((error) => {
                    console.error(error);
                    displayErrorToast();
                });
        }

        function hideModal() {
            modal.hide();
        }
    }


    function displayAllAvailabilities() {
        fetch('/admin/availabilities')
            .then(
                response => response.json()
                )
            .then(availabilities => {
                const events = availabilities.map(availability => ({
                    id: availability.consultantId,
                    title: `${availability.consultant.name} ${availability.start.slice(0, -3)} - ${availability.end.slice(0, -3)}`,
                    start: availability.date,
                }));
                calendar.addEventSource(events);
            })
            .catch(error => console.error(error));
    }

    function displaySuccessToast() {
        Toastify({
            text: 'Availability added successfully!',
            style: {
                background: "#7dc67d",
            },
            close: true,
            gravity: 'bottom',
            position: 'right',
        }).showToast();
    }

    function displayErrorToast() {
        Toastify({
            text: 'Something went wrong!',
            style: {
                background: "#ff0000",
            },
            close: true,
            gravity: 'bottom',
            position: 'right',
        }).showToast();
    }
});
