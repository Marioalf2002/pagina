<?php
/**
 * GIT DEPLOYMENT SCRIPT
 *
 * Used for automatically deploying websites via github or bitbucket, more deets here:
 * https://gist.github.com/riodw/71f6e2244534deae652962b32b7454e2
 * How To Use:
 * https://medium.com/riow/deploy-to-production-server-with-git-using-php-ab69b13f78ad
 */
// The commands
$commands = array(
    'whoami',
    'git log',
    'git remote -v',
    'git status',
    'cat ../curso/index.php',
);
// Run the commands for output
$output = '';
foreach($commands AS $command){
    // Run it
    $tmp = shell_exec($command);
    // Output
    $output .= "<h2><span style=\"color: #6BE234;\">\$</span> <span style=\"color: #729FCF;\">{$command}\n</span></h2>";
    $output .= htmlentities(trim($tmp)) . "\n";
}
// Make it pretty for manual user access (and why not?)
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>GIT DEPLOYMENT SCRIPT</title>
</head>
<body style="background-color: #000000; color: #FFFFFF; font-weight: bold; padding: 0 10px;">
<pre>
 ____________________________
|                            |
| Git Deployment Script v0.1 |
|      github.com/riodw 2019 |
|____________________________|

<?php echo $output; ?>
</pre>
</body>
</html>