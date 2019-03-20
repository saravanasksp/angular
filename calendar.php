<?php include "header.php"?>



<section class="sectionThree py-5">
    <div class="container py-5">
		<div class="section-header text-center">
			<h3>Calendar Demo</h3>
			<p>This page demonstrates the use of a calendar control built in Angular JS. It allows the user to choose a date.</p>
		</div>
        <div class="row mt-4">
			<div class="col-md-12 pb-4 pb-md-0">
				<section id="MyCalendar" ng-controller="CalendarDemoCtrl" ng-init="loadEvents()">
            <div class="alert alert-success" ng-show="event">Event selected:{{event.startTime|date:
                'MMM/dd,yyyy,HH:mm'}} - {{event.endTime|date:'MMM/dd,yyyy,HH:mm'}}, {{event.title}}
            </div>

            <div class="btn-toolbar">
                <div class="btn-group">
                    <button type="button" class="btn btn-default" ng-class="{active:mode==='month'}"
                            ng-click="changeMode('month')">
                        Month
                    </button>
                    <button type="button" class="btn btn-default" ng-class="{active:mode==='week'}"
                            ng-click="changeMode('week')">
                        Week
                    </button>
                    <button type="button" class="btn btn-default" ng-class="{active:mode==='day'}"
                            ng-click="changeMode('day')">
                        Day
                    </button>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-default" ng-disabled="isToday()"
                            ng-click="today()">
                        Today
                    </button>
                </div>
            </div>
            <div class="well well-sm">
                <calendar ng-model="currentDate" calendar-mode="mode" event-source="eventSource"
                          range-changed="reloadSource(startTime, endTime)"
                          event-selected="onEventSelected(event)"
                          time-selected="onTimeSelected(selectedTime, events)" step="30"></calendar>
            </div>
        </section>
			</div>
		</div>
	</div>
</section>



<?php include "footer.php"?>
