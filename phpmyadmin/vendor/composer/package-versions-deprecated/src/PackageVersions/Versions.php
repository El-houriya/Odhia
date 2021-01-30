<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'phpmyadmin/phpmyadmin';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'bacon/bacon-qr-code' => '2.0.2@add6d9ff97336b62f95a3b94f75cea4e085465b2',
  'dasprid/enum' => '1.0.3@5abf82f213618696dda8e3bf6f64dd042d8542b2',
  'google/recaptcha' => '1.2.4@614f25a9038be4f3f2da7cbfd778dc5b357d2419',
  'paragonie/constant_time_encoding' => 'v2.3.0@47a1cedd2e4d52688eb8c96469c05ebc8fd28fa2',
  'paragonie/random_compat' => 'v9.99.100@996434e5492cb4c3edcb9168db6fbb1359ef965a',
  'phpmyadmin/motranslator' => '4.0@fcb370254998fda7eeccfd7c787b4deb71b0d77c',
  'phpmyadmin/shapefile' => '2.1@e23b767f2a81f61fee3fc09fc062879985f3e224',
  'phpmyadmin/sql-parser' => '5.4.1@32175ee13bde3aef7bdff492ce2d0f0c9cb5cbf4',
  'phpmyadmin/twig-i18n-extension' => 'v3.0.0@1f509fa3c3f66551e1f4a346e4477c6c0dc76f9e',
  'phpseclib/phpseclib' => '2.0.29@497856a8d997f640b4a516062f84228a772a48a8',
  'pragmarx/google2fa' => 'v6.0.1@8df7d8fe0734c7ddad5fce2251adf4b3e9218643',
  'pragmarx/google2fa-qrcode' => 'v1.0.3@fd5ff0531a48b193a659309cc5fb882c14dbd03f',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'samyoul/u2f-php-server' => 'v1.1.4@0625202c79d570e58525ed6c4ae38500ea3f0883',
  'symfony/cache' => 'v4.4.15@969a76c2dbce7e4306684f5376718147d1ec4ae7',
  'symfony/cache-contracts' => 'v1.1.10@8d5489c10ef90aa7413e4921fc3c0520e24cbed7',
  'symfony/config' => 'v4.4.15@7c5a1002178a612787c291a4f515f87b19176b61',
  'symfony/dependency-injection' => 'v4.4.15@89274c8847dff2ed703e481843eb9159ca25cc6e',
  'symfony/expression-language' => 'v4.4.15@54b118a1c91991b90e67919146db66093def1bf9',
  'symfony/filesystem' => 'v4.4.15@ebc51494739d3b081ea543ed7c462fa73a4f74db',
  'symfony/polyfill-ctype' => 'v1.18.1@1c302646f6efc070cd46856e600e5e0684d6b454',
  'symfony/polyfill-mbstring' => 'v1.18.1@a6977d63bf9a0ad4c65cd352709e230876f9904a',
  'symfony/polyfill-php56' => 'v1.18.1@13df84e91cd168f247c2f2ec82cc0fa24901c011',
  'symfony/polyfill-util' => 'v1.18.1@46b910c71e9828f8ec2aa7a0314de1130d9b295a',
  'symfony/service-contracts' => 'v1.1.9@b776d18b303a39f56c63747bcb977ad4b27aca26',
  'symfony/var-exporter' => 'v4.4.15@bb6c505d1492bf55534184c0a38826bda529e5e2',
  'symfony/yaml' => 'v4.4.15@c7885964b1eceb70b0981556d0a9b01d2d97c8d1',
  'tecnickcom/tcpdf' => '6.3.5@19a535eaa7fb1c1cac499109deeb1a7a201b4549',
  'twig/twig' => 'v2.13.1@57e96259776ddcacf1814885fc3950460c8e18ef',
  'williamdes/mariadb-mysql-kbs' => '1.2.11@2653637d537329b2b2ba7290dc70eacf09c74072',
  'composer/package-versions-deprecated' => '1.11.99@c8c9aa8a14cc3d3bec86d0a8c3fa52ea79936855',
  'composer/xdebug-handler' => '1.4.3@ebd27a9866ae8254e873866f795491f02418c5a5',
  'doctrine/instantiator' => '1.3.1@f350df0268e904597e3bd9c4685c53e0e333feea',
  'jean85/pretty-package-versions' => '1.5.1@a917488320c20057da87f67d0d40543dd9427f7a',
  'myclabs/deep-copy' => '1.10.1@969b211f9a51aa1f6c01d1d2aef56d3bd91598e5',
  'nette/bootstrap' => 'v3.0.2@67830a65b42abfb906f8e371512d336ebfb5da93',
  'nette/di' => 'v3.0.5@766e8185196a97ded4f9128db6d79a3a124b7eb6',
  'nette/finder' => 'v2.5.2@4ad2c298eb8c687dd0e74ae84206a4186eeaed50',
  'nette/neon' => 'v3.2.1@a5b3a60833d2ef55283a82d0c30b45d136b29e75',
  'nette/php-generator' => 'v3.4.1@7051954c534cebafd650efe8b145ac75b223cb66',
  'nette/robot-loader' => 'v3.3.1@15c1ecd0e6e69e8d908dfc4cca7b14f3b850a96b',
  'nette/schema' => 'v1.0.2@febf71fb4052c824046f5a33f4f769a6e7fa0cb4',
  'nette/utils' => 'v3.1.3@c09937fbb24987b2a41c6022ebe84f4f1b8eec0f',
  'nikic/php-parser' => 'v4.10.2@658f1be311a230e0907f5dfe0213742aff0596de',
  'phar-io/manifest' => '1.0.3@7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
  'phar-io/version' => '2.0.1@45a2ec53a73c70ce41d55cedef9063630abaf1b6',
  'php-webdriver/webdriver' => '1.8.3@fb0fc4cb01c70a7790a5fcc91d461b88c83174a2',
  'phpdocumentor/reflection-common' => '2.1.0@6568f4687e5b41b054365f9ae03fcb1ed5f2069b',
  'phpdocumentor/reflection-docblock' => '4.3.4@da3fd972d6bafd628114f7e7e036f45944b62e9c',
  'phpdocumentor/type-resolver' => '1.0.1@2e32a6d48972b2c1976ed5d8967145b6cec4a4a9',
  'phpmyadmin/coding-standard' => '1.0@80b8a0ed7c24bc9dc46821ed259d57aa7f61329e',
  'phpspec/prophecy' => 'v1.10.3@451c3cd1418cf640de218914901e51b064abb093',
  'phpstan/phpdoc-parser' => '0.3.5@8c4ef2aefd9788238897b678a985e1d5c8df6db4',
  'phpstan/phpstan' => '0.11.20@938dcc03a005280e1a9587ec7684345bff06ebfc',
  'phpunit/php-code-coverage' => '6.1.4@807e6013b00af69b6c5d9ceb4282d0393dbb9d8d',
  'phpunit/php-file-iterator' => '2.0.2@050bedf145a257b1ff02746c31894800e5122946',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.2@1038454804406b0b5f5f520358e78c1c2f71501e',
  'phpunit/php-token-stream' => '3.1.1@995192df77f63a59e47f025390d2d1fdf8f425ff',
  'phpunit/phpunit' => '7.5.20@9467db479d1b0487c99733bb1e7944d32deded2c',
  'sebastian/code-unit-reverse-lookup' => '1.0.1@4419fcdb5eabb9caa61a27c7a1db532a6b55dd18',
  'sebastian/comparator' => '3.0.2@5de4fc177adf9bce8df98d8d141a7559d7ccf6da',
  'sebastian/diff' => '3.0.2@720fcc7e9b5cf384ea68d9d930d480907a0c1a29',
  'sebastian/environment' => '4.2.3@464c90d7bdf5ad4e8a6aea15c091fec0603d4368',
  'sebastian/exporter' => '3.1.2@68609e1261d215ea5b21b7987539cbfbe156ec3e',
  'sebastian/global-state' => '2.0.0@e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4',
  'sebastian/object-enumerator' => '3.0.3@7cfd9e65d11ffb5af41198476395774d4c8a84c5',
  'sebastian/object-reflector' => '1.1.1@773f97c67f28de00d397be301821b06708fca0be',
  'sebastian/recursion-context' => '3.0.0@5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8',
  'sebastian/resource-operations' => '2.0.1@4d7a795d35b889bf80a0cc04e08d77cedfa917a9',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'squizlabs/php_codesniffer' => '3.5.6@e97627871a7eab2f70e59166072a6b767d5834e0',
  'symfony/console' => 'v4.4.15@90933b39c7b312fc3ceaa1ddeac7eb48cb953124',
  'symfony/finder' => 'v4.4.15@60d08560f9aa72997c44077c40d47aa28a963230',
  'symfony/polyfill-php73' => 'v1.18.1@fffa1a52a023e782cdcc221d781fe1ec8f87fcca',
  'symfony/polyfill-php80' => 'v1.18.1@d87d5766cbf48d72388a9f6b85f280c8ad51f981',
  'symfony/process' => 'v4.4.15@9b887acc522935f77555ae8813495958c7771ba7',
  'theseer/tokenizer' => '1.1.3@11336f6f84e16a720dae9d8e6ed5019efa85a0f9',
  'webmozart/assert' => '1.8.0@ab2cb0b3b559010b75981b1bdce728da3ee90ad6',
  'phpmyadmin/phpmyadmin' => '5.0.4@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}