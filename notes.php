
<?php


error_reporting(0); // Turns off all error reporting


ini_set('display_errors', '0'); // Turns off displaying errors
ini_set('display_startup_errors', '0'); // Turns off displaying startup errors

echo "test";


echo "https://github.com/mishoo/UglifyJS2/releases";



?>


<script src="path/to/uglify-js.js"></script>


<script src="path/to/uglify-js.js"></script>
<script>
  const code = `
    function greet(name) {
        console.log('Hello, ' + name);
    }

    greet('Alice');
  `;

  const options = {
    // Options for minification and obfuscation
  };

  const result = UglifyJS.minify(code, options);
  console.log(result.code);
</script>


IF(@a_credits < OLD.amount)THEN	
		SIGNAL SQLSTATE VALUE 'HY000' SET MESSAGE_TEXT = 'You dont have enough Credits to process this request';
	END IF;



<script>
// Get references to the source and target elements
const sourceElement = document.getElementById('source');
const targetElement = document.getElementById('target');

// Clone the child nodes of the source element
const childNodes = Array.from(sourceElement.childNodes);
const elementsToMove = childNodes.filter(node => node.tagName && node.tagName.toLowerCase() !== 'script');

// Append the filtered elements to the target element
elementsToMove.forEach(element => {
    targetElement.appendChild(element);
});


jquery
$(document).ready(function () {
    // Get references to the source and target elements
    const $sourceElement = $('#source');
    const $targetElement = $('#target');

    // Find and filter child elements in the source
    const $elementsToMove = $sourceElement.children().not('script');

    // Append the filtered elements to the target
    $targetElement.append($elementsToMove);
});
