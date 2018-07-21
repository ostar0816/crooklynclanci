<?php
    function getEditorAds($api_root_url) {
        $url = $api_root_url . "api/v1/members/account/editorads/listPublic/";
        $options = array(
            CURLOPT_RETURNTRANSFER => true,     // return web page
            CURLOPT_HEADER         => false,    // don't return headers
            CURLOPT_FOLLOWLOCATION => true,     // follow redirects
            CURLOPT_ENCODING       => "",       // handle all encodings
            CURLOPT_USERAGENT      => "spider", // who am i
            CURLOPT_AUTOREFERER    => true,     // set referer on redirect
            CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
            CURLOPT_TIMEOUT        => 120,      // timeout on response
            CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
            CURLOPT_SSL_VERIFYPEER => false     // Disabled SSL Cert checks
        );

        $ch      = curl_init( $url );
        curl_setopt_array( $ch, $options );
        $response = curl_exec( $ch );
        $err     = curl_errno( $ch );
        $errmsg  = curl_error( $ch );
        $header  = curl_getinfo( $ch );
        curl_close( $ch );
        //  echo "<br>response = " . $response;
        if (!$err && json_decode($response) != "not found") {
            if (isset(json_decode($response)->EditorAds)) {
                $editorAds = json_decode($response)->EditorAds;
                return filterTableAdImages($editorAds->results);
            }
        }
        return [];
    }

    function filterTableAdImages($editorAds) {
        $sliderImagesForTrack = [];
        $sliderImagesForMarquee = [];
        $adsForTrack = [];
        $trackAdIndex = 0;
    
        for ($i=0; $i<count($editorAds); $i++) {
            $editorAd = $editorAds[$i];
            $ad = array('adType'=>$editorAd->adType, 'adMainImageFullUrl'=>$editorAd->adMainImageFullUrl, 'redirectUrl'=>$editorAd->redirectUrl);
            if ($editorAd->adType == 'Track') {
                if ($trackAdIndex == 0) {
                    $adsForTrack = [];
                    array_push($adsForTrack, $ad);
                    $trackAdIndex ++;
                } else {
                    array_push($adsForTrack, $ad);
                    array_push($sliderImagesForTrack, $adsForTrack);
                    $trackAdIndex = 0;
                }
            } else if ($editorAd->adType == 'Marquee') {
                array_push($sliderImagesForMarquee, array($ad));
            }
        }
        if ($trackAdIndex == 1 && count($adsForTrack) == 1) {
            $adTrackPlaceholder = null;
            for ($j=0; $j<count($editorAds); $j++) {
                if ($editorAds[$j]->adType == 'TrackPlaceholder') {
                    $adTrackPlaceholder = $editorAds[$j];
                    break;
                }
            }
            if ($adTrackPlaceholder != null) {
                $ad = array('adType'=>$adTrackPlaceholder->adType, 'adMainImageFullUrl'=>$adTrackPlaceholder->adMainImageFullUrl, 'redirectUrl'=>$adTrackPlaceholder->redirectUrl);
        
                array_push($adsForTrack, $ad);
                array_push($sliderImagesForTrack, $adsForTrack);
                $trackAdIndex = 0;
            }
        }
        $editorTableAdSliderImages = array_merge($sliderImagesForTrack, $sliderImagesForMarquee);
        return shuffleArray($editorTableAdSliderImages);
    }
    
    function shuffleArray($array) {
        for ($i = count($array) - 1; $i > 0; $i--) {
            $j = rand() % ($i + 1);            
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
        return $array;
    } 
?>