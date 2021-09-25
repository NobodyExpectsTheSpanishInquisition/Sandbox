<?php

namespace App\CreateIndex;

use Elasticsearch\Client;
use Elasticsearch\ClientBuilder;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'createIndex',
    description: 'Add a short description for your command',
)]
class CreateIndexCommand extends Command
{
    private Client $client;

    public function __construct(string $name = null)
    {
        parent::__construct($name);

        $this->client = ClientBuilder::create()->build();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $indexConfiguration = [
            'index' => 'first_index',
        ];

        if ($this->client->indices()->exists($indexConfiguration)) {
            echo "Index already exists. \n";

            return Command::INVALID;
        }
        $this->client->indices()->create($indexConfiguration);

        return Command::SUCCESS;
    }
}
