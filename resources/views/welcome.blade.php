<x-layout>
    <div class="max-w-6xl mx-auto flex justify-center items-center flex-col mt-20">
        <div class="flex justify-center items-center flex-col mb-28">
            <h1
                class="mb-12 text-xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-4xl dark:text-white text-center">
                <span lang="en">
                    Digital CSRD preparation program
                </span>
                <span lang="nl">
                    Digitaal CSRD voorbereidingsprogramma
                </span>
            </h1>
            <p
                class="mb-12 p-4 text-sm font-normal text-gray-500 lg:text-md sm:px-16 xl:px-40 dark:text-gray-400 text-center">
                <span lang="en">
                    Your online program that guides you through the complex CSRD process. It’s a step-by step digital
                    program that
                    is
                    educational and supports you and your team with a clear structure, practical tools, unique data
                    driven
                    tools, templates, and suggested actions to become compliant to CSRD.
                </span>
                <span lang="nl">
                    Uw online programma dat u door het complexe CSRD-proces leidt. Het is een stapsgewijs digitaal
                    programma dat educatief is en jou en je team ondersteunt met een duidelijke structuur, praktische
                    tools, unieke datagestuurde tools, sjablonen en voorgestelde acties om compliant te worden aan CSRD.
                </span>
            </p>
            <a type="button" href="{{ URL::route('schedule.demo') }}" id="book-demo-button"
                class="text-white bg-main_dark_blue  hover:bg-main_turquoise font-medium rounded-lg text-sm px-6 py-4 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                <span lang="en">
                    Get Started With Your Program Today
                </span>
                <span lang="nl">
                    Ga vandaag nog aan de slag met uw programma
                </span>
            </a>
        </div>

        <div class="flex justify-center items-center flex-col max-w-md mb-28 p-4">
            <div class="flex-col border-2 border-[#f1f1f1] rounded-3xl  p-10 bg-[#ffffffaa] shadow-2xl relative">
                <di class="z-10">
                    <h1 class="font-bold text-xs uppercase">
                        <span lang="en">
                            About this program
                        </span>
                        <span lang="nl">
                            Over dit programma
                        </span>
                    </h1>
                    <h1 class="font-bold text-lg text-main_turquoise py-2">
                        <span lang="en">
                            CSRD-reporting
                        </span>
                        <span lang="nl">
                            CSRD-rapportage
                        </span>
                    </h1>
                    <p class="mb-4">
                        <span lang="en">
                            Increasingly, businesses need to respond to global pressures such as climate change,
                            resource
                            scarcity, and social inequalities. Under the new CSRD (Corporate Sustainability Reporting
                            Directive), starting in 2025, companies are required to report yearly on their
                            sustainability
                            performances. For many companies this is a difficult process as there are many
                            sustainability
                            indicators and the CRSD covers an extensive range of sustainability topics.
                        </span>
                        <span lang="nl">
                            Bedrijven moeten in toenemende mate reageren op wereldwijde druk zoals klimaatverandering,
                            grondstoffenschaarste en sociale ongelijkheid. Volgens de nieuwe CSRD (Corporate
                            Sustainability Reporting Directive) moeten bedrijven vanaf 2025 jaarlijks verslag uitbrengen
                            over hun duurzaamheidsprestaties. Voor veel bedrijven is dit een moeilijk proces omdat er
                            veel duurzaamheidsindicatoren zijn en de CRSD een uitgebreid scala aan
                            duurzaamheidsonderwerpen bestrijkt.
                        </span>
                    </p>

                    <h1 class="font-bold text-lg text-main_turquoise py-2">CSRD-succes</h1>
                    <p>
                        <span lang="en">
                            With helpful formats & tools, the program guides you through the whole CSRD project cycle.
                            Ensuring even non-sustainability professionals like ordinary project managers to manage
                            setting
                            up a CSRD report. Enables your company to do (part of) the CSRD process yourself, decreases
                            the
                            amount of preparation time & avoid making costly mistakes by learning from experienced
                            consultants in the sustainability and reporting sector. So you are ready for the future and
                            can
                            focus on operating your business.
                        </span>
                        <span lang="nl">
                            Met handige formats & tools leidt het programma u door de hele CSRD-projectcyclus. Zorgt
                            ervoor dat zelfs niet-duurzaamheidsprofessionals zoals gewone projectmanagers het opzetten
                            van een CSRD-verslag kunnen beheren. Stelt uw bedrijf in staat om (een deel van) het
                            CSRD-proces zelf uit te voeren, vermindert de voorbereidingstijd & voorkomt kostbare fouten
                            door te leren van ervaren adviseurs in de duurzaamheids- en rapportagesector. Zo bent u
                            klaar voor de toekomst en kunt u zich richten op het runnen van uw bedrijf.
                        </span>
                    </p>
                </di>
                <div id="shape-1" class="rounded-full  absolute opacity-70 ">
                </div>

                <div id="shape-2" class="rounded-full absolute opacity-70 ">
                </div>
            </div>
        </div>

        <div class="flex flex-row grid grid-cols-2 md:grid-cols-4 mb-28 gap-5 p-4">
            <x-gridRow title="Duration of Program" title_nl="Programmaduur"
                description="Preparation Phase: 6-9 months (incl. double Materiality Analysis), to become CSRD compliant 12-18
        months"
                description_nl="Voorbereidingsfase: 6-9 maanden (incl. dubbele materialiteitsanalyse), om aan de CSRD te voldoen 12-18 maanden"
                image="one.png" />

            <x-gridRow title="Hours per week" title_nl="Uren per week"
                description="ca. 4 hours for the project manager, incl. practical actions"
                description_nl="ca. 4 uur voor de projectmanager, incl. praktische acties" image="two.png" />

            <x-gridRow title="Get in action" title_nl="Ga aan de slag"
                description="Each chapter has practical tasks and material to guide you step-by-step through the CSRD preparation"
                description_nl="Elk hoofdstuk bevat praktische opdrachten en materiaal om u stap voor stap door de CSRD-voorbereiding te loodsen."
                image="three.png" />

            <x-gridRow title="Support" title_nl="Ondersteuning"
                description="E-mail & ppt templates, video explanation & optional consulting support or possibility to add automated materiality analysis tool"
                description_nl="E-mail & Powerpoint templates, video uitleg, optionele consulting ondersteuning and mogelijkheid tot geautomatiseerde materialiteitsanalyse tool"
                image="four.png" />
        </div>

        <div class="mb-28 relative">
            <div>
                <h1 class="text-main_dark_blue text-xl md:text-3xl font-extrabold text-center mb-4 md:mb-[64px]">
                    <span lang="en">
                        This program includes:
                    </span>
                    <span lang="nl">
                        Dit programma omvat:
                    </span>
                </h1>
            </div>
            <div class="grid grid-cols-1 p-4 md:grid-cols-3 gap-4">
                <x-gridBoxes title="Implementation Process Guide" title_nl="Implementatieprocesgids"
                    description="Clear structure that guids you through every step in the implementation process"
                    description_nl="Een duidelijke structuur die u door elke stap in het implementatieproces leidt."
                    image="one.svg" />

                <x-gridBoxes title="CSRD Phases" title_nl="CSRD-fasen"
                    description="All the information you need to understand each phase of CSRD"
                    description_nl="Alle informatie die u nodig hebt om elke fase van CSRD te begrijpen"
                    image="two.svg" />

                <x-gridBoxes title="Actions and Advice" title_nl="Acties en advies"
                    description="Actions and advise for every step to take to be CSRD compliant"
                    description_nl="Acties en advies voor elke te nemen stap om aan de CSRD te voldoen."
                    image="three.svg" />

                <x-gridBoxes title="Visualizing" title_nl="Visualiseren"
                    description="Flow charts visualizing the process"
                    description_nl="Stroomdiagrammen die het proces visualiseren" image="four.svg" />

                <x-gridBoxes title="Answers" title_nl="Antwoorden"
                    description="Answers to all CSRD questions you didn’t know you had"
                    description_nl="Antwoorden op alle CSRD-vragen waarvan u niet wist dat u ze had" image="five.svg" />

                <x-gridBoxes title="Automated tools" title_nl="Automatische tools"
                    description="Data driven templates & possibility to add automated tools"
                    description_nl="Data gedreven templates en mogelijkheid om geautomatiseerde tools toe te voegen"
                    image="six.svg" />

                <x-gridBoxes title="Templates" title_nl="Sjablonen"
                    description="Templates for the materiality analysis, stakeholder analysis, stakeholder survey, industry
                benchmarking, etc."
                    description_nl="Sjablonen voor de materialiteitsanalyse, stakeholderanalyse, stakeholderonderzoek, industriebenchmarking, enz."
                    image="seven.svg" />

                <x-gridBoxes title="Dashboard" title_nl="Dashboard"
                    description="Preparation steps for an impact dashboard"
                    description_nl="Voorbereidingsstappen voor een impactdashboard" image="eight.svg" />

                <x-gridBoxes title="Learning" title_nl="Leren" description="Learnings from other companies"
                    description_nl="Leerpunten van andere bedrijven" image="nine.svg" />

            </div>

            <div id="shape-3" class="rounded-full absolute opacity-70 ">
            </div>
            <div id="shape-4" class="rounded-full absolute opacity-70 ">
            </div>
        </div>

        <x-testimonial />

        <x-customer />

    </div>

    <x-contact />

    <x-scroll />

    <x-modal />

</x-layout>

<style>
    #shape-1,
    #shape-2,
    #shape-3 {
        z-index: -1;
        width: 300px;
        height: 300px;
        filter: blur(24px);
    }

    #shape-4 {
        z-index: -1;
        width: 200px;
        height: 200px;
        filter: blur(24px);
    }

    #shape-5 {
        z-index: -1;
        width: 200px;
        height: 200px;
        filter: blur(24px);
    }

    #shape-1 {
        background-color: rgb(121, 244, 215);
        top: -5%;
        left: 50%;
    }

    #shape-2 {
        background-color: rgb(121, 244, 215);
        bottom: -5%;
        right: 50%;
    }

    #shape-3 {
        background-color: rgb(121, 244, 215);
        bottom: -5%;
        left: 15%;
    }

    #shape-4 {
        background-color: rgb(121, 244, 215);
        top: 10%;
        right: 10%;
    }
</style>
