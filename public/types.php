<ul dnd-list="list.people" dnd-allowed-types="list.allowedTypes" dnd-disable-if="list.people.length >= list.max">

    <li ng-repeat="person in list.people" dnd-draggable="person" dnd-type="person.type" dnd-disable-if="person.type == 'unknown'" dnd-moved="list.people.splice($index, 1)" dnd-effect-allowed="move" class="background-<%person.type%>">
        <dnd-nodrag>
          <div dnd-handle class="handle">:::</div>
          <div class="name">
              <input type="text" ng-model="person.name" class="background-<%person.type%> form-control input-sm">
          </div>
        </dnd-nodrag>
    </li>

    <li class="dndPlaceholder">
        Drop any <strong><%list.allowedTypes.join(' or ')%></strong> here
    </li>

</ul>