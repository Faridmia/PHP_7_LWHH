<?php
    set_time_limit(0); // ata use kora hoi onk somoi time limit ar karone boro file download hoyar somoi hold
    // jate pare akarone time limit 0 dile joto khon dorkar tokhon hobe

    $ch = curl_init("https://unsplash.com/photos/47bVgRJ3bFI");

    $filename = fopen("images2.jpg","w");

    curl_setopt($ch,CURLOPT_FILE,$filename);

    curl_exec($ch);