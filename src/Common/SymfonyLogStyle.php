<?php
namespace Robo\Common;

use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Input\StringInput;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Style log messages with SymfonyStyle
 */
class SymfonyLogStyle implements LogStyleInterface
{
    protected $symfonyStyle;

    public function __construct(OutputInterface $output)
    {
        // SymfonyStyle & c. contain both input and output functions,
        // but we only need the output methods here. Create a stand-in
        // input object to satisfy the SymfonyStyle constructor.
        $this->symfonyStyle = new SymfonyStyle(new StringInput(''), $output);
    }

    public function success($message, $context)
    {
        $this->symfonyStyle->success($message);
    }

    public function error($message, $context)
    {
        $this->symfonyStyle->error($message);
    }

    public function warning($message, $context);
    {
        $this->symfonyStyle->warning($message);
    }

    public function note($message, $context);
    {
        $this->symfonyStyle->note($message);
    }

    public function caution($message, $context);
    {
        $this->symfonyStyle->caution($message);
    }
}