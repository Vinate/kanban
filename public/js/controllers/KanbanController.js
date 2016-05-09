/*jshint undef: false, unused: false, indent: 2*/
/*global angular: false */
'use strict';

angular.module('kanban').controller('KanbanController', ['$scope', 'BoardService', 'BoardDataFactory','$http',

    function ($scope, BoardService, BoardDataFactory,$http) {


    var self = this;
    function getDataMember(){
        $http({
            method: 'GET',
            url : "http://localhost:8000/getDataMember",
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}

        }).success(function (r) {
            self.DataMember = r;
          // console.log(self.DataMember);
        })
    }
    getDataMember();

    BoardDataFactory.getKanban().success(function (r) {  //------
       // console.log(r);
        self.kanbanBoard = BoardService.kanbanBoard(r);
       //console.log(self.kanbanBoard)

    });



    self.kanbanSortOptions = {

        //restrict move across columns. move only within column.
        /*accept: function (sourceItemHandleScope, destSortableScope) {
         return sourceItemHandleScope.itemScope.sortableScope.$id !== destSortableScope.$id;
         },*/
        itemMoved: function (event) {
            //event.source.itemScope.modelValue.status = event.dest.sortableScope.$parent.column.name;
           // console.log(event.source.itemScope.modelValue.card_id);

            var $MoveEvent = {
                cardId: event.source.itemScope.modelValue.id,
                columnName: event.dest.sortableScope.$parent.column.name
            };

            BoardService.cardMove($MoveEvent)
                .success(function (r) {
                    BoardDataFactory.getKanban().success(function (r) {  //------
                        // console.log(r);
                        self.kanbanBoard = BoardService.kanbanBoard(r);
                        // console.log(self.kanbanBoard)

                    });
                });
        },
        accept: function (event) {
           //console.log(event.itemScope.$parent.card.pre_card);
            if (event.itemScope.$parent.card.pre_card!= null){
                var check = (event.itemScope.$parent.card.pre_card.status_id == 4);
            }else var check = true;
            return check;

        },
       
        orderChanged: function (event) {
            //console.log(event)
        },
        dragStart: function (event) {


        },
        containment: '#board'
    };

    self.removeCard = function (column, card) {
        BoardService.removeCard(self.kanbanBoard, column, card);
    };

    self.addNewCard = function (column) {
        BoardService.addNewCard(self.kanbanBoard, column);
    };

    self.detailCard = function (card) {
        BoardService.detailCard(card);
    };


}]);
