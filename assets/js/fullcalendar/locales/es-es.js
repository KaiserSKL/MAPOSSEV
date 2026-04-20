FullCalendar.globalLocales.push(function () {
  'use strict';

  var esEs = {
    code: "es-es",
    buttonText: {
      prev: "Anterior",
      next: "Siguiente",
      today: "Hoy",
      month: "Mes",
      week: "Semana",
      day: "Dia",
      list: "Lista"
    },
    weekText: "Sem",
    allDayText: "dia entero",
    moreLinkText: function(n) {
      return "más +" + n;
    },
    noEventsText: "No hay eventos para mostrar"
  };

  return esEs;

}());
