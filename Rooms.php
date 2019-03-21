<?php


class Rooms {
    private function getRooms() {
        return array($cockpit, $dorm, $hallway, $escapePod, $engineRoom);
    }
}

$cockpit = array(
    'description' => "You have entered the Cockpit. The captain is sitting in the command chair in the center of the room. There is an empty chair at the control panel.",
    'captain' => "The Captain turns to greet you, and says 'Hello, . When you are ready, sit down at the Control Panel and set our course to planet Zarbon.'",
    'controlPanel' => "The Control Panel dashboard displays several coordinates, including ones back home to Earth. Are you ready to start your journey to planet Zarbon?",
    'exit' => ""
);

$dorm = array(
    'description' => "These are your living quarters. You notice your rather firm bed is neatly made. There is not much to do here besides rest.",
    'bed' => "You look tired. Do you want to sleep?",
    'exit' => "",
)