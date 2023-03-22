async function checkAvailability() {
    const datePicker = document.getElementById('appointment-datepicker');
    const consultantList = document.getElementById('consultant-list');

    const date = datePicker.value;
    if (date === '') {
      datePicker.style.border = '1px solid red';
      return;
    }

    try {
      const response = await fetch(`/available-consultants/${date}`);
      if (!response.ok) {
        throw new Error('Network response was not ok');
      }
      const data = await response.json();

      while (consultantList.firstChild) {
        consultantList.removeChild(consultantList.firstChild);
      }

      const consultantListItems = data.map((consultant) => {
        const timeSlots = Object.values(consultant.timeSlots)
          .map(
            (timeslot) =>
              `<div>
                 <input type="radio" name="timeslot" required value="${timeslot}">
                 ${timeslot}
               </div>`
          )
          .join('');

        const listItem = document.createElement('li');
        listItem.classList.add('consultant-list');
        listItem.setAttribute('id', consultant.id);

        const nameSpan = document.createElement('span');
        nameSpan.textContent = consultant.name;

        listItem.appendChild(nameSpan);
        listItem.insertAdjacentHTML('beforeend', timeSlots);

        return listItem;
      });

      const consultantListUl = document.createElement('ul');
      consultantListItems.forEach((item) => {
        consultantListUl.appendChild(item);
      });

      consultantList.appendChild(consultantListUl);
    } catch (error) {
      console.error('Error fetching available consultants:', error);
    }
  }


          async function scheduleDemo() {
              const datePicker = document.getElementById('appointment-datepicker');
              const date = datePicker.value;
              const form = document.getElementById('schedule-demo-form');
              const formData = new FormData(form);
              const consultantId = document.querySelector('input[name="timeslot"]:checked').parentNode.parentNode.id;
              formData.append('consultantId', consultantId);
              formData.append('date', date);

              try {
                  const response = await fetch('/schedule-demo', {
                      method: 'POST',
                      headers: {
                          'Content-Type': 'application/json',
                          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                              'content'),
                      },
                      body: JSON.stringify(Object.fromEntries(formData)),
                  });
                  if (response.ok) {
                      displaySuccessToast();
                      form.reset();
                      document.getElementById('consultant-list').innerHTML = '';
                  } else {
                      throw new Error('Network response was not ok');
                  }
              } catch (error) {
                  displayErrorToast();
              }
          }

          function displaySuccessToast() {
              Toastify({
                  text: 'Thanks for scheduling a product demo!',
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
