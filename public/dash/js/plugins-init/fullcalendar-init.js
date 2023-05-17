
"use strict"

function fullCalender(){
	const now = new Date();
	const year = now.getFullYear();
	const month = (now.getMonth() + 1).toString().padStart(2, "0");
	const day = now.getDate().toString().padStart(2, "0");

	const formattedDate = `${year}-${month}-${day}`;
	
	/* initialize the external events
		-----------------------------------------------------------------*/

		var containerEl = document.getElementById('external-events');
		new FullCalendar.Draggable(containerEl, {
		  itemSelector: '.external-event',
		  eventData: function(eventEl) {
			return {
			  title: eventEl.innerText.trim()
			}
		  }
		 
		});
		/* initialize the calendar
		-----------------------------------------------------------------*/

		var calendarEl = document.getElementById('calendar');
		var calendar = new FullCalendar.Calendar(calendarEl, {
		  headerToolbar: {
			left: 'prev,next today',
			center: 'title',
			right: 'dayGridMonth,timeGridWeek,timeGridDay'
		  },
		  
		  selectable: true,
		  selectMirror: true,
		  select: function(arg) {
			var title = prompt('Event Title:');
			if (title) {
			  calendar.addEvent({
				title: title,
				start: arg.start,
				end: arg.end,
				allDay: arg.allDay
			  })
			}
			calendar.unselect()
		  },
		  
		  editable: true,
		  droppable: true, // this allows things to be dropped onto the calendar
		  drop: function(arg) {
			// is the "remove after drop" checkbox checked?
			if (document.getElementById('drop-remove').checked) {
			  // if so, remove the element from the "Draggable Events" list
			  arg.draggedEl.parentNode.removeChild(arg.draggedEl);
			}
		  },
		  initialDate: formattedDate,
			weekNumbers: true,
			navLinks: true, // can click day/week names to navigate views
			editable: true,
			selectable: true,
			nowIndicator: true,
			events: bookings
		});
		calendar.render();
	
}	
	
	
	
jQuery(window).on('load',function(){
	setTimeout(function(){
		fullCalender();	
	}, 1000);
	
	
});	
	

		

// events: [
// 	{
// 	title: 'Booked Rooms',
// 	url: 'http://google.com/',
// 	start: '2023-03-07',
// 	end: '2023-03-10',
// 	className: "bg-danger"
// 	},
// 	{
// 	title: 'Available Rooms',
// 	url: 'http://google.com/',
// 	start: '2023-03-07',
// 	end: '2023-03-09',
// 	className: "bg-success"
// 	}
// 	// {
// 	// title: 'Conference',
// 	// url: 'http://google.com/',
// 	// start: '2023-03-12T20:00:00',
// 	// end: '2023-03-13T20:00:00',
// 	// className: "bg-warning"
// 	// },
// ]