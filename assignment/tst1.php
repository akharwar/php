<?php
/* The \b in the pattern indicates a word boundary, so only the distinct
 * word "web" is matched, and not a word partial like "webbing" or "cobweb" */
if (preg_match("/p/i", "PHP is the web scripting language of choice.",$match)) {
    echo "A match was found.";
} else {
    echo "A match was not found.";
}

print_r($match);