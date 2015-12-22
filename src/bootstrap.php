<?php
/**
 * Magedownload CLI
 *
 * PHP version 5
 *
 * @category  MageDownload
 * @package   MageDownload
 * @author    Steve Robbins <steve@steverobbins.com>
 * @copyright 2015 Steve Robbins
 * @license   http://creativecommons.org/licenses/by/4.0/ CC BY 4.0
 * @link      https://github.com/steverobbins/magedownload-cli
 */

require_once __DIR__ . '/../vendor/autoload.php';

use MageDownload\Command\ConfigureCommand;
use MageDownload\Command\DownloadCommand;
use MageDownload\Command\FileCommand;
use MageDownload\Command\InfoCommand;
use Symfony\Component\Console\Application;

$app = new Application('MageDownload CLI', '1.3.0');

$app->add(new ConfigureCommand);
$app->add(new DownloadCommand);
$app->add(new FileCommand);
$app->add(new InfoCommand);

$app->run();
