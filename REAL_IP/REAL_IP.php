<?php
echo "
      ######  #######    #    #          ### ######  
      #     # #         # #   #           #  #     # 
      #     # #        #   #  #           #  #     # 
      ######  #####   #     # #           #  ######  
      #   #   #       ####### #           #  #       
      #    #  #       #     # #           #  #       
      #     # ####### #     # #######    ### #       \n";

// Prompt the user for the URL
$url = readline("Enter the URL: ");

// Check if the URL is valid
if (!filter_var($url, FILTER_VALIDATE_URL)) {
    echo "Invalid URL entered!";
    exit;
}

// Retrieve the IP address of the host
$ip = gethostbyname(parse_url($url, PHP_URL_HOST));

// Display the IP address
echo "IP Address: " . $ip . "\n";
?>
