<!DOCTYPE html>
<html>
    <head>
        <title>Calenrier</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.4.0/main.css" integrity="sha256-ejA/z0dc7D+StbJL/0HAnRG/Xae3yS2gzg0OAnIURC4=" crossorigin="anonymous">
        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
                font-size: 14px;
            }

            #script-warning { font-weight: bold; color: red }

            #calendar {
                max-width: 1100px;
                margin: 100px auto;
                padding: 0 10px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar fixed-top navbar-light" style="background-color: #d4d4d5;">
            <a class="navbar-brand" href="#">Menu</a>
        </nav>

        <div class="response alert alert-success mt-2" style="display: none;"></div>
        
        <div id='calendar'></div>

        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nouveau</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/calendrier/create" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="" class="col-form-label">Titre</label>
                        <input type="text" class="form-control" name="title" id="recipient-name" placeholder="Saisir le titre">
                    </div>
                    <div class="form-group">
                        <label for="" class="col-form-label">Couleur:</label>
                        <input type="color" class="form-control" name="color">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="">Date de début</label>
                        <input type="date" class="form-control" id="start" name="start" placeholder="Saisir date début">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="">Date de fin</label>
                        <input type="date" class="form-control" id="end" name="end" placeholder="Saisir date de fin">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary">Valider</button>
                </div>
            </form>
            </div>
        </div>
        </div>

        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Modification</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/calendrier/update" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="" class="col-form-label">Titre</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Saisir le titre">
                    </div>
                    <div class="form-group">
                        <label for="" class="col-form-label">Couleur:</label>
                        <input type="color" class="form-control" id="color" name="color">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Date de début</label>
                            <input type="date" class="form-control" id="edit_start" name="start" placeholder="Saisir date début">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Date de fin</label>
                            <input type="date" class="form-control" id="edit_end" name="end" placeholder="Saisir date de fin">
                        </div>
                    </div>
                    <input type="hidden" class="form-control" name="id" id="id" >
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary">Valider</button>
                </div>
            </form>
            </div>
        </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.4.0/main.min.js" integrity="sha256-oenhI3DRqaPoTMAVBBzQUjOKPEdbdFFtTCNIosGwro0=" crossorigin="anonymous"></script>
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
        
        <script>
        
            document.addEventListener('DOMContentLoaded', function() {
                var initialTimeZone = 'local';
                var calendarEl = document.getElementById('calendar');

                var calendar = new FullCalendar.Calendar(calendarEl, {
                    timeZone: initialTimeZone,
                    initialView: 'dayGridMonth',
                    locale: 'fr',
                    headerToolbar: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'New dayGridMonth,timeGridWeek,timeGridDay,listWeek'
                    },
                    buttonText: {
                        today: 'Aujourd\'hui',
                        month: 'Mois',
                        week: 'Semaine',
                        day: 'Jour',
                        list: 'Planning',
                    },
                    customButtons: {
                        New : {
                            text: 'Nouveau',
                            click: function(){
                                $('#addModal').modal("show");
                            }
                        }
                    },
                    allDayText: 'Toute la journée',
                    noEventsText: 'Aucun événement à afficher',
                    //initialDate: '2020-11-14',
                    navLinks: true, // can click day/week names to navigate views
                    nowIndicator: true,
                    editable: true,
                    selectable: true,
                    dayMaxEvents: true, // allow "more" link when too many events
                    events : [
                        @foreach($data as $calendar)
                        {
                            id : '{{ $calendar->id  }}',
                            title : '{{ $calendar->title  }}',
                            backgroundColor : '{{ $calendar->color  }}',
                            start : '{{ $calendar->start_date }}',
                            end : '{{ $calendar->start_date }}',
                            /*@if ($calendar->end_date)
                                end: '{{ $calendar->end_date}}',
                            @endif*/
                        },
                        @endforeach
                    ],
                    //eventTimeFormat: { hour: 'numeric', minute: '2-digit', timeZoneName: 'short' },
                    
                    eventClick: function(info) {
                        var eventObj = info.event;
                        console.log(eventObj.start);
                        $('#event_id').val(eventObj._id);
                        $('#id').val(eventObj.id);
                        $('#title').val(eventObj.title);
                        $('#color').val(eventObj.backgroundColor);
                        $('#edit_start').val(moment(eventObj.start).format('YYYY-MM-DD'));
                        $('#edit_end').val(moment(eventObj.start).format('YYYY-MM-DD'));
                        $('#editModal').modal();
                    },

                    dateClick: function(date, allDay, view){
                        $("#addModal").modal("show"); 
                    }
                });

                calendar.render();

            });

            function displayMessage(message) {
                $(".response").css('display','block');
                $(".response").html(""+message+"");
                setInterval(function() { $(".response").fadeOut(); }, 4000);
            }
        </script>
    </body>
</html>