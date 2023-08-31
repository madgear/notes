
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