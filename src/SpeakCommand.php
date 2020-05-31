<?php
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;

use Symfony\Component\Console\Output\OutputInterface;
Class SpeakCommand extends Command
{
	protected function configure()
    {
    	$this->setName('speak')
    		->setDescription('Speak a message.')
    		->addArgument(
    		 	'message',InputArgument::OPTIONAL,'What message should i speadk?','Hello World'
    		 );
    		//->addOption('');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
      	exec('say '.$input->getArgument('message'));
 		//	exec("ping google.com -n 1");
      	$output->writeln('Simple message display.');
        $output->writeln('<info>Sucess message display.</info>');
        $output->writeln('<error>Error message display.</error>');
        return 0;
    }
}