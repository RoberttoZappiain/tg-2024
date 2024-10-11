require('./bootstrap');
import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import interactionPlugin from '@fullcalendar/interaction';
import esLocale from '@fullcalendar/core/locales/es';  // Importar el archivo de localización
import googleCalendarPlugin from '@fullcalendar/google-calendar';
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var eventsListEl = document.querySelector('#events-list tbody');

    // Verifica que el elemento del calendario existe antes de inicializar el calendario
    if (calendarEl && eventsListEl) {
        var calendar = new Calendar(calendarEl, {
            plugins: [ dayGridPlugin, interactionPlugin, googleCalendarPlugin ],
            themeSystem: 'bootstrap',
            initialView: 'dayGridMonth',
            googleCalendarApiKey: 'AIzaSyBWeatvFEp5-cxE0DIVb2lesV23vSLBkec',  // Reemplaza con tu clave de API
            events: {
                googleCalendarId: 'totalgroundmkt@gmail.com',  // Reemplaza con tu ID de calendario
                className: 'gcal-event',  // Aplica esta clase CSS a eventos de Google Calendar
                success: function(events) {
                    renderEventsList(events);
                },
                failure: function(error) {
                    console.error('Error al cargar los eventos de Google Calendar:', error);
                }
            },
            locale: esLocale,  // Configurar el idioma a español
            editable: true,
            droppable: true,
        });

        calendar.render();

        // Función para renderizar la lista de eventos
        function renderEventsList(events) {
            eventsListEl.innerHTML = '';  // Limpiar lista existente
            // Limitar a los primeros 5 elementos
            events.slice(0, 5).forEach((event, index) => {
                var row = document.createElement('tr');

                var cellIndex = document.createElement('td');
                cellIndex.textContent = index + 1;
                row.appendChild(cellIndex);

                var cellTitle = document.createElement('td');
                cellTitle.textContent = event.title;
                row.appendChild(cellTitle);

                var cellDate = document.createElement('td');
                var eventDate = new Date(event.start).toLocaleDateString();  // Formatear la fecha del evento
                cellDate.textContent = eventDate;
                row.appendChild(cellDate);

                eventsListEl.appendChild(row);
            });
        }
    }
});
