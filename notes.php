<?php
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