<?php

class apiModel {

    public function __construct($parent) {
        $this->db = $parent->db;
    }

    public function googleBooks($term='') {
        require_once './google-api-php-client/vendor/autoload.php';
        $client = new Google_Client();
        $client->setApplicationName("serversidelanguages");
        $client->setDeveloperKey("AIzaSyA6DiimSEuUZ9W7_6_CXw01O8nLpPYjnYY");

        $service = new Google_Service_Books($client);

        $optParams = array('filter' => 'free-ebooks');
        $result = $service->volumes->listVolumes('Henry David Thoreau', $optParams);
        // $results = $service->volumes->listVolumes($term, $optParams);

        return $result;
    }
}

?>