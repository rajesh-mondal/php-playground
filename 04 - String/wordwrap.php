<?php
/* WordWrap in String */
$string = "Lorem Ipsum is simply dummy textttttttttttttttttttttttttttttttttttttttttt of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.";
echo wordwrap( $string, 26, "\n", true );