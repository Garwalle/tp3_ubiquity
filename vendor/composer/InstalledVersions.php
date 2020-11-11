<?php

namespace Composer;

use Composer\Semver\VersionParser;






class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => '1.0.3',
    'version' => '1.0.3.0',
    'aliases' => 
    array (
    ),
    'reference' => NULL,
    'name' => 'phpmv/ubiquity-project',
  ),
  'versions' => 
  array (
    'frameworks/jquery' => 
    array (
      'pretty_version' => '2.1.4',
      'version' => '2.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ef9c4fe9fcb23914bba6ec6d32c556e4a38a0fd9',
    ),
    'mindplay/annotations' => 
    array (
      'pretty_version' => '1.3.1',
      'version' => '1.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '77ef66f79fb65a7b7e7e005be0bd6b643de43867',
    ),
    'phpmv/php-mv-ui' => 
    array (
      'pretty_version' => '2.3.10',
      'version' => '2.3.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '87cc87e78c8eb63487db9b3f21fbd1502eb9b18f',
    ),
    'phpmv/ubiquity' => 
    array (
      'pretty_version' => '2.3.12',
      'version' => '2.3.12.0',
      'aliases' => 
      array (
      ),
      'reference' => '65ad30f66a269d543a9ccd190296f5c504bd2023',
    ),
    'phpmv/ubiquity-codeception' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '74e44a9a46ab63d6c0dd27b520d7bb952984e108',
    ),
    'phpmv/ubiquity-commands' => 
    array (
      'pretty_version' => '0.0.16',
      'version' => '0.0.16.0',
      'aliases' => 
      array (
      ),
      'reference' => '22ffb6eeda08f1650c4017ed8db1ee607c22ab38',
    ),
    'phpmv/ubiquity-dev' => 
    array (
      'pretty_version' => '0.0.20',
      'version' => '0.0.20.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e3603a53b968c0481276e597643145152d7ab190',
    ),
    'phpmv/ubiquity-devtools' => 
    array (
      'pretty_version' => '1.2.17',
      'version' => '1.2.17.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bc39608ee30cb73dc26af2510c7ac0c84e8138d1',
    ),
    'phpmv/ubiquity-project' => 
    array (
      'pretty_version' => '1.0.3',
      'version' => '1.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'phpmv/ubiquity-webtools' => 
    array (
      'pretty_version' => '2.3.12',
      'version' => '2.3.12.0',
      'aliases' => 
      array (
      ),
      'reference' => '54da942cd9f6949846c9b53555df34a8e3f950cb',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.20.0',
      'version' => '1.20.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f4ba089a5b6366e453971d3aad5fe8e897b37f41',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.20.0',
      'version' => '1.20.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '39d483bdf39be819deabf04ec872eb0b2410b531',
    ),
    'twig/twig' => 
    array (
      'pretty_version' => 'v3.1.1',
      'version' => '3.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b02fa41f3783a2616eccef7b92fbc2343ffed737',
    ),
  ),
);







public static function getInstalledPackages()
{
return array_keys(self::$installed['versions']);
}









public static function isInstalled($packageName)
{
return isset(self::$installed['versions'][$packageName]);
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

$ranges = array();
if (isset(self::$installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = self::$installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', self::$installed['versions'][$packageName])) {
$ranges = array_merge($ranges, self::$installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', self::$installed['versions'][$packageName])) {
$ranges = array_merge($ranges, self::$installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', self::$installed['versions'][$packageName])) {
$ranges = array_merge($ranges, self::$installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}





public static function getVersion($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

if (!isset(self::$installed['versions'][$packageName]['version'])) {
return null;
}

return self::$installed['versions'][$packageName]['version'];
}





public static function getPrettyVersion($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

if (!isset(self::$installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return self::$installed['versions'][$packageName]['pretty_version'];
}





public static function getReference($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

if (!isset(self::$installed['versions'][$packageName]['reference'])) {
return null;
}

return self::$installed['versions'][$packageName]['reference'];
}





public static function getRootPackage()
{
return self::$installed['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
}
}