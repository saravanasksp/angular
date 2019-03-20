

//menu
var menusection = angular.module('headerMenu', []);
    menusection.controller("menuController", function($scope) {
  $scope.menus = [  
	{
		title: "Home", 
		action: "/angular"
	},
	{
		title: "Example", 
		action: "#", 
		menus: [
		  {
			title: "Event Calendar",
			action: "calendar.php"
		  },
		  {
			title: "File Upload",
			action: "file-upload.php"
		  },
		  {
			title: "Form Addon",
			action: "formmultiple.php"
		  },
		  {
			title: "Color Picker",
			action: "colorpicker.php"
		  },
		  {
			title: "Drag & Drap",
			action: "dragdrop.php"
		  }
		]
	},
	{
		title: "Form", 
		action: "form.php"
	}
]
});


// slider
var app = angular.module("indexWrapper", []);	
app.controller('slideController', function($scope) {
  var slides = [{
    image: "img/banner1.jpg",
    id: 1
  }, {
    image: "img/banner2.jpg",
    id: 2
  }, {
    image: "img/banner-placeholder.png",
    id: 3
  }];

  $scope.slides = slides;
});

//gallery
app.controller('galleryController', function galleryController($scope) {
	//$scope.stopPropagation();
	
	
	$scope.images = [
	{
	"source" 	: "img/project1.jpg",
	"altText" 	: "Person 1",
	"title" 	: "Section 1",
	"type"		: "filter1, all" 
	},
	{
	"source" 	: "img/project3.jpg",
	"altText" 	: "Person 2",
	"title" 	: "Section 2",
	"type"		: "filter2, all" 
	},
	{
	"source" 	: "img/project1.jpg",
	"altText" 	: "Person 3",
	"title" 	: "Section 3",
	"type"		: "filter1, all" 
	},
	{
	"source" 	: "img/project2.jpg",
	"altText" 	: "Person 4",
	"title" 	: "Section 4",
	"type"		: "filter2, all" 
	},
	{
	"source" 	: "img/project1.jpg",
	"altText" 	: "Person 5",
	"title" 	: "Section 5",
	"type"		: "filter1, all" 
	},
	{
	"source" 	: "img/project1.jpg",
	"altText" 	: "Person 6",
	"title" 	: "Section 6",
	"type"		: "filter1, all" 
	},
	{
	"source" 	: "img/project1.jpg",
	"altText" 	: "Person 7",
	"title" 	: "Section 7",
	"type"		: "filter1, all" 
	},
	{
	"source" 	: "img/project1.jpg",
	"altText" 	: "Person 8",
	"title" 	: "Section 8",
	"type"		: "filter1, all" 
	}
];

});

//iconbox
app.controller('iconBox', function iconBox($scope) {
	$scope.servicebox = [
		{
			"icon" 		: "fas fa-shopping-cart",
			"title" 	: "ng-app",
			"desc"		: "The ng-app directive tells AngularJS that this is the root element of the AngularJS application. All AngularJS applications must have a root element. You can only have one ng-app directive in your HTML document." 
		},
		{
			"icon" 		: "fas fa-desktop",
			"title" 	: "ng-controller",
			"desc"		: "The ng-controller directive adds a controller to your application. In the controller you can write code, and make functions and variables, which will be parts of an object, available inside the current HTML element." 
		},
		{
			"icon" 		: "fas fa-lock",
			"title" 	: "$scope",
			"desc"		: "The scope is the binding part between the HTML (view) and the JavaScript (controller). The scope is an object with the available properties and methods. The scope is available for both the view and the controller." 
		}
	];
});



//scrolltop
$(window).scroll(function(){ 
	if ($(this).scrollTop() > 200) { 
		$('.backtoTop').fadeIn(); 
	} else { 
		$('.backtoTop').fadeOut(); 
	} 
}); 
var backtop = angular.module('backtopApp', []);
    backtop.controller('backTop', ['$scope', function($scope) { 
  $scope.scrollToTop = function($var) {       
		$("html, body").animate({ scrollTop: 0 }, 600); 
		return false; 
  };  
}]);

//calendar
var displaycalendar = angular.module('CalendarApp', []);
    displaycalendar.controller('CalendarController', ['$scope', function($scope) {
     $scope.monthShortNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun",
  "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
];
     $scope.D = new Date().getDate();
     $scope.M = $scope.monthShortNames[new Date().getMonth()];
}]);


//drag and drop
var dragmodule = angular.module('mydragModule', []);
dragmodule.factory('wgDragData', function () {
    // compare two target positions. 
    var comparePositions = function(p1, p2) {
        if (p1 && p2) 
        {
            // p[0] - jquery target element
            // p[1] - placement (before/after)
            return (p1[0][0] === p2[0][0]) && (p1[1] == p2[1]);            
        }
        return !(p1 || p2);
    }
    var wgDragData = {
        // current drop target position - array [targetItem, placement(after/before)]
        targetPosition: null,
        // last drop position used when dragleave from item to container
        lastPosition : null,
        // dragged items
        dragging: null,
        // existing placeholders
        placeholders: $(),
        // current drop target
        currentDropTarget: null,
        // current container
        currentContainer : null,
        // last drop target is used for detection when mouse is returned from outside of container
        lastDropTarget : null,
        // contains all possible target positions without displayed placeholder (all positions beside dragged item)
        positionsWithoutPlaceholder : null,
        // this flag is set when placeholders are displayed
        showPlaceholders : false,
        
        updateDropEffect : function(e) {
            e.originalEvent.dataTransfer.dropEffect = wgDragData.currentDropTarget ? 'move' : 'none';
        },
        calculateInsertPosition : function(e) {
            if (wgDragData.currentDropTarget == wgDragData.currentContainer) {
                if (wgDragData.lastDropTarget == null || wgDragData.lastDropPosition == null) {
                    // insert placeholder as last item
                    return [$('.dragItem:last', $(wgDragData.currentContainer)), 'after'];
                }
                else {
                    return wgDragData.lastDropPosition;
                }
            }
            var insertAfter = e.originalEvent.offsetX > e.originalEvent.target.offsetWidth/2;
            return [$(wgDragData.currentDropTarget), insertAfter ? 'after' : 'before'];
        },
        attachDragEvents: function(elObj) {
           elObj.on('dragenter.wg dragleave.wg drop.wg', wgDragData.dragEventHandler); 
           elObj.on('dragover.wg', wgDragData.dragOverHandler);
        },
        refreshPlaceholdersPosition : function(e) {
                var thisObj = $(e.target);
                if (thisObj.hasClass('dragPlaceholder')) {
                    // drag over placeholder, do nothing
                    return;
                }
            
                var oldTargetPosition = wgDragData.targetPosition;
                var targetPosition = wgDragData.calculateInsertPosition(e);
                if (comparePositions(targetPosition, oldTargetPosition)) {
                    // position was not changed
                    return;
                }
                wgDragData.targetPosition = targetPosition;
                if (targetPosition != null) {    
                    wgDragData.lastDropPosition = targetPosition;
                }
                // dont show placeholder when only one item is dragging and targetPosition points to dragged item position
                wgDragData.showPlaceholders = true;
                if (wgDragData.dragging.length == 1) { 
                    for (var j=0; j< wgDragData.positionsWithoutPlaceholder.length; j++) {
                        if (wgDragData.positionsWithoutPlaceholder[j][0] === targetPosition[0][0] && wgDragData.positionsWithoutPlaceholder[j][1] == targetPosition[1]) {
                            wgDragData.showPlaceholders = false;
                            break;
                        }
                    }
                }
                if (!wgDragData.showPlaceholders)  
                {
                    wgDragData.placeholders.detach();
                }
                else {
                    var placeholder = wgDragData.placeholders.first();
                    var targetItem = wgDragData.targetPosition[0];
                    var placement = wgDragData.targetPosition[1];
                    targetItem[placement](placeholder);
                    wgDragData.placeholders.not(placeholder).detach();
                }
        },
        dragOverHandler : function(e) {
            e.preventDefault();
            wgDragData.updateDropEffect(e);
            wgDragData.refreshPlaceholdersPosition(e);
        },
        dragEventHandler: function (e) {
            var thisObj = $(this);
            e.preventDefault();
            e.stopPropagation();
            if (e.type == 'dragleave') {
                if (wgDragData.currentDropTarget == this) {
                    // mouse was moved outside of container
                    wgDragData.currentDropTarget = null;
                    wgDragData.placeholders.detach();
                    wgDragData.lastDropTarget = null;
                    wgDragData.targetPosition = null;
                }
                return false;
            }
            if (e.type == 'drop') {
                wgDragData.dragging.trigger('dragend.wg', wgDragData.currentContainer);
                return false;
            }
            if (e.type == 'dragenter') {
                wgDragData.currentContainer = thisObj.hasClass('dragContainer') ? this : thisObj.parent('.dragContainer')[0];
                var isDisabled = thisObj.data('wg-drag-disabled');
                if (wgDragData.currentDropTarget != null) {
                    wgDragData.lastDropTarget = wgDragData.currentDropTarget;
                }
                wgDragData.currentDropTarget = isDisabled ? null : this;
                wgDragData.updateDropEffect(e);
                wgDragData.refreshPlaceholdersPosition(e);
                return false;
            }
        },
        containerMouseEventHandler : function(e) {
            console.log(e.type);
        }
    };
    return wgDragData;
});

dragmodule.directive('wgDragContainer', ['wgDragData', function (wgDragData) {
    return {
        restrict: 'A',
        link: function (scope, element, attrs) {
            var moveItemFn = scope[attrs.wgDragItemMoved];
            var elementObj = $(element);
            elementObj.addClass('dragContainer');
            var placeholder = $('<div class="dragPlaceholder">');
            wgDragData.placeholders = wgDragData.placeholders.add(placeholder);
            elementObj.on('sortupdate', function () {
                wgDragData.placeholders.detach();
                var draggedItems = wgDragData.dragging;
                wgDragData.dragging = null;
                var targetPosition = wgDragData.targetPosition;
                var sourceIndexes = $.map(draggedItems, function(item, i) {
                    return $(item).index();
                });
                if (targetPosition && wgDragData.showPlaceholders) {
                    moveItemFn({
                        from: sourceIndexes,
                        to: targetPosition[0].index()
                    });
                    scope.$apply();
                }
            });
            wgDragData.attachDragEvents(placeholder);
            wgDragData.attachDragEvents(elementObj);
        }
    };
}]);

// directives registration
dragmodule.directive('wgDragItem', ['wgDragData', function (wgDragData) {
    return {
        restrict: 'A',
        link: function (scope, element, attrs) {
            var elementObj = $(element);
            var isDisabled = attrs['wgDragDisabled'];
            if (isDisabled) {            
                elementObj.data('wg-drag-disabled', isDisabled);
                wgDragData.attachDragEvents(elementObj);
                return;
            }
            elementObj.addClass('dragItem');
            var parentContainer = elementObj.parent('.dragContainer');
            elementObj.attr('draggable', 'true').on('dragstart.wg', function (e) {
                if (isDisabled) {
                    // cancel dragging of disabled item
                    event.preventDefault();
                    return;
                }
                var dt = e.originalEvent.dataTransfer;
                dt.dropEffect = 'move';
                dt.effectAllowed = 'move';
                // text must be set in Firefox
                dt.setData('Text', '');
                (wgDragData.dragging = $(this)).addClass('dragSourceItem');
                // pre-set all possible positions beside dragged item
                wgDragData.positionsWithoutPlaceholder = [[this, 'before'],[this, 'after']];
                var prevItem = wgDragData.dragging.prev();
                if (prevItem) {
                    wgDragData.positionsWithoutPlaceholder.push([prevItem[0], 'after']);
                }
                var nextItem = wgDragData.dragging.next();
                if (nextItem) {
                    wgDragData.positionsWithoutPlaceholder.push([nextItem[0], 'before']);
                }
            }).on('dragend.wg', function (e, targetContainer) {
                if (!wgDragData.dragging) {
                    return;
                }
                if (!targetContainer) {
                    // cancel drag operation
                    wgDragData.targetPosition = null;
                }
                wgDragData.dragging.removeClass('dragSourceItem');
                parentContainer.trigger('sortupdate');
            }).not('a[href],img').on('selectstart.wg', function () {
                if(this.dragDrop)
                    this.dragDrop();
                return false;
            });
            wgDragData.attachDragEvents(elementObj);
        }
    };
}]);

var mainCtrl = function ($scope) {
    var log = function (message) {
        if ($scope.logItems.length > 2) {
            // remove oldest item
            $scope.logItems.splice(0, 1);
        }
        $scope.logItems.push({
            message: message
        });
    };

    $scope.items = [];
    $scope.items.push({
        id: 999,
        title: 'Disabled item',
        disabled: true
    });

    for (var i = 0; i < 6; i++) {
        $scope.items.push({
            id: i,
            title: 'Item ' + i
        });
    }
    $scope.moveItem = function (moveData) {
        var toIndex = moveData.to;
        var fromItems = moveData.from.map(function(itemIndex){
            return $scope.items[itemIndex];
        });
        fromItems.forEach(function(item) {
            var fromIndex = $scope.items.indexOf(item);
            $scope.items.splice(toIndex, 0, $scope.items.splice(fromIndex, 1)[0]);
            log('\'' + $scope.items[toIndex].title + '\' moved from ' + fromIndex + ' to ' + toIndex);
            toIndex++;
        });
    };

    $scope.logItems = [];

    $scope.itemClick = function (item) {
        log('\'' + item.title + '\' clicked');
    };
};

dragmodule.controller('ddController', mainCtrl);


//form-addon
var ctApp = angular.module("contactAddon", []);
ctApp.service("ContactService", function() {
    var uid = 1;
    var contacts = [{
        id: 0,
        'name': 'John',
        'email': 'John@gmail.com',
        'phone': '01-2345-6789'
    }];
    // Save Service for sving new contact and saving existing edited contact.
    this.save = function(contact) {
        if (contact.id == null) {
            contact.id = uid++;
            contacts.push(contact);
        } else {
            for (i in contacts) {
                if (contacts[i].id == contact.id) {
                    contacts[i] = contact;
                }
            }
        }
    }
    // serach for a contact	
    this.get = function(id) {
            for (i in contacts) {
                if (contacts[i].id == id) {
                    return contacts[i];
                }
            }
        }
        //Delete a contact
    this.delete = function(id) {
        for (i in contacts) {
            if (contacts[i].id == id) {
                contacts.splice(i, 1);
            }
        }
    }
    //Show all contacts
    this.list = function() {
        return contacts;
    }
});
////Controller area .....
ctApp.controller("ContactfCtlr", function($scope, ContactService) {
    $scope.contacts = ContactService.list();

    $scope.saveContact = function() {
        ContactService.save($scope.newcontact);
        $scope.newcontact = {};
    }

    $scope.delete = function(id) {
        ContactService.delete(id);
        if ($scope.newcontact.id == id) {
            $scope.newcontact = {};
        }
    }

    $scope.edit = function(id) {
        $scope.newcontact = angular.copy(ContactService.get(id));
    }
});
 
//colorpicker
 var colorpicker = angular.module('colorApp', ['colorpicker.module']);
    colorpicker.controller('colormainCtrl', ['$scope', function($scope) {

  
    $scope.hexPicker = {
      color: ''
    };

    $scope.rgbPicker = {
      color: ''
    };

    $scope.rgbaPicker = {
      color: ''
    };

    $scope.nonInput = {
      color: ''
    };

    $scope.resetColor = function() {
      $scope.hexPicker = {
        color: '#ff0000'
      };
    };

    $scope.resetRBGColor = function() {
      $scope.rgbPicker = {
        color: 'rgb(255,0,0)'
      };
    };

    $scope.resetRBGAColor = function() {
      $scope.rgbaPicker = {
        color: 'rgb(65,46,74, 0.8)'
      };
    };

    $scope.resetNonInputColor = function() {
      $scope.nonInput = {
        color: '#ffffff'
      };
    };

  }]);
 
// form validation
var formvalid = angular.module('formValidation', []);
    formvalid.controller('mainController', ['$document','$scope','$window','$location', function($document,$scope,$window,$location) {
     $scope.submitted = false;
		// function to submit the form after all validation has occurred	
	//$scope.email = 'me@example.com';		
	
		$window.location.href = '#';
				
		$scope.submitForm = function(isValid) {
			
			// check to make sure the form is completely valid
			if (isValid) {
				alert('Thank you');
				//$location.path('/hi');
			}
      else {
        /*$("#usrName").addClass("has-error").addClass("has-feedback");
        $("#error-icon").removeClass("ng-hide");*/
        $scope.response='please correct fields';
        $scope.submitted = true;
      }

		};
    $scope.callMe = function(val){
      if(val==null) {
        //alert("please enter a value");
        //$document.getElementById('uName').focus();
        $("#uName").blur();
        $("#userName").focus();
      }
      else{
      $window.alert(val);
      }
    };

}]);



//file-upload
var filewpload = angular.module('ImgUploadPreview', []);
    filewpload.controller("fileUploadCtrl",['$scope',function($scope){
}]);			
filewpload.directive("imgUpload",function($http,$compile){
	return {
		restrict : 'AE',
		scope : {
			url : "@",
			method : "@"
		},
		template : 	'<input class="fileUpload" type="file" multiple />'+
					'<div class="dropzone">'+
						'<div class="msg">Click or Drag and Drop files to upload</div>'+
				   '</div>'+
				   '<div class="preview clearfix">'+
						'<div class="previewData clearfix mb-2" ng-repeat="data in previewData track by $index">'+
							'<img src={{data.src}}></img>'+
							'<div class="previewDetails">'+
								'<div class="detail"><b>Name : </b>{{data.name}}</div>'+
								'<div class="detail"><b>Type : </b>{{data.type}}</div>'+
								'<div class="detail"><b>Size : </b> {{data.size}}</div>'+
							'</div>'+
							'<div class="previewControls">'+
								'<span ng-click="upload(data)" class="circle upload">'+
									'<i class="fa fa-check"></i>'+
								'</span>'+
								'<span ng-click="remove(data)" class="circle remove">'+
									'<i class="fas fa-trash-alt"></i>'+
								'</span>'+
							'</div>'+
						'</div>'+	
				   '</div>',
		link : function(scope,elem,attrs){
			var formData = new FormData();
			scope.previewData = [];	

			function previewFile(file){
				var reader = new FileReader();
				var obj = new FormData().append('file',file);			
				reader.onload=function(data){
					var src = data.target.result;
					var size = ((file.size/(1024*1024)) > 1)? (file.size/(1024*1024)) + ' mB' : (file.size/		1024)+' kB';
					scope.$apply(function(){
						scope.previewData.push({'name':file.name,'size':size,'type':file.type,
												'src':src,'data':obj});
					});								
					console.log(scope.previewData);
				}
				reader.readAsDataURL(file);
			}

			function uploadFile(e,type){
				e.preventDefault();			
				var files = "";
				if(type == "formControl"){
					files = e.target.files;
				} else if(type === "drop"){
					files = e.originalEvent.dataTransfer.files;
				}			
				for(var i=0;i<files.length;i++){
					var file = files[i];
					if(file.type.indexOf("image") !== -1){
						previewFile(file);								
					} else {
						alert(file.name + " is not supported");
					}
				}
			}	
			elem.find('.fileUpload').bind('change',function(e){
				uploadFile(e,'formControl');
			});

			elem.find('.dropzone').bind("click",function(e){
				$compile(elem.find('.fileUpload'))(scope).trigger('click');
			});

			elem.find('.dropzone').bind("dragover",function(e){
				e.preventDefault();
			});

			elem.find('.dropzone').bind("drop",function(e){
				uploadFile(e,'drop');																		
			});
			scope.upload=function(obj){
				$http({method:scope.method,url:scope.url,data: obj.data,
					headers: {'Content-Type': undefined},transformRequest: angular.identity
				}).success(function(data){

				});
			}

			scope.remove=function(data){
				var index= scope.previewData.indexOf(data);
				scope.previewData.splice(index,1);
			}
		}
	}
});

//calendar
angular.module('calendarDemoApp', ['ui.rCalendar']);
angular.module('calendarDemoApp').controller('CalendarDemoCtrl', ['$scope', function ($scope) {		
    'use strict';
    $scope.changeMode = function (mode) {
        $scope.mode = mode;
    };

    $scope.today = function () {
        $scope.currentDate = new Date();
    };

    $scope.isToday = function () {
        var today = new Date(),
            currentCalendarDate = new Date($scope.currentDate);

        today.setHours(0, 0, 0, 0);
        currentCalendarDate.setHours(0, 0, 0, 0);
        return today.getTime() === currentCalendarDate.getTime();
    };

    $scope.loadEvents = function () {
        $scope.eventSource = createRandomEvents();
    };

    $scope.onEventSelected = function (event) {
        $scope.event = event;
    };

    $scope.onTimeSelected = function (selectedTime, events) {
        console.log('Selected time: ' + selectedTime + ' hasEvents: ' + (events !== undefined && events.length !== 0));
    };

    function createRandomEvents() {
        var events = [];
        for (var i = 0; i < 50; i += 1) {
            var date = new Date();
            var eventType = Math.floor(Math.random() * 2);
            var startDay = Math.floor(Math.random() * 90) - 45;
            var endDay = Math.floor(Math.random() * 2) + startDay;
            var startTime;
            var endTime;
            if (eventType === 0) {
                startTime = new Date(Date.UTC(date.getUTCFullYear(), date.getUTCMonth(), date.getUTCDate() + startDay));
                if (endDay === startDay) {
                    endDay += 1;
                }
                endTime = new Date(Date.UTC(date.getUTCFullYear(), date.getUTCMonth(), date.getUTCDate() + endDay));
                events.push({
                    title: 'All Day - ' + i,
                    startTime: startTime,
                    endTime: endTime,
                    allDay: true
                });
            } else {
                var startMinute = Math.floor(Math.random() * 24 * 60);
                var endMinute = Math.floor(Math.random() * 180) + startMinute;
                startTime = new Date(date.getFullYear(), date.getMonth(), date.getDate() + startDay, 0, date.getMinutes() + startMinute);
                endTime = new Date(date.getFullYear(), date.getMonth(), date.getDate() + endDay, 0, date.getMinutes() + endMinute);
                events.push({
                    title: 'Event - ' + i,
                    startTime: startTime,
                    endTime: endTime,
                    allDay: false
                });
            }
        }
        return events;
    }
}]);
//file-upload
