<?php


class Rooms {
    private function getRooms() {
        $cockpit = array (
            'description' => 'You have entered the Cockpit. The captain is sitting in the command chair in the center of the room. There is an empty chair at the control panel.' ,
            'captain' => 'The Captain turns to greet you, telling you to sit at the Control Panel and set our course to planet Zarbon.' ,
            'controlPanel' => 'The Control Panel dashboard displays several coordinates, including ones back home to Earth. Are you ready to start your journey to planet Zarbon?' ,
            'exit' => $hallway ,
        );

        $dorm = array (
            'description' => 'These are your living quarters. You notice your rather firm bed is neatly made. There is not much to do here besides rest.' ,
            'bed' => 'You look tired . Do you want to sleep ?' ,
            'exit' => $hallway ,
        );

        $escapePod = array (
            'description' => 'There is an Escape Pod accross from your dorm. It looks pretty small.' ,
            'useEscapePod' => 'Are you sure you want to use the Escape Pod?' ,
            'exit' => $hallway ,
        );

        $engineRoom = array (
            'description' => 'You enter the engine room, listening to the quiet humming of the dark matter powered rockets. \nYou notice an empty chair with what appear to be controls of some sort.' ,
            'chair' => 'You sit in the chair, and realize that the controls are for a duel cannon laser gun under the ship.' ,
            'exit' => $hallway ,
        );

        $hallway = array (
            'description' => 'This is the hallway. It leads to all rooms in the spaceship. In the bow is the Cockpit. \nThe stern is where the engines are. Your dorm is on the port side, and the Escape Pod is on the starboard side.\nWhere do you want to go?' ,
            'cockpit' => $cockpit ,
            'escapePod' => $escapePod ,
            'engineRoom' => $engineRoom ,
            'dorm' => $dorm ,
        );
    }
}
