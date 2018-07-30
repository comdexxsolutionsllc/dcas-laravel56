<?php
file_put_contents($file = 'public/phpcs.xml', $write = str_replace($match = '<?xml version="1.0" encoding="UTF-8"?>', $insert = '<?xml version="1.0" encoding="UTF-8"?>
<?xml-stylesheet type="text/xsl" href="http://82a6366e.ngrok.io/phpcs.xsl"?>', $current = file_get_contents($file)));
