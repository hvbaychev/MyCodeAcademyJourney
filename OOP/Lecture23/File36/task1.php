<?php

class Config
{
    private stdClass $settings;

    public function __construct()
    {
        $this->settings = new stdClass();
    }

    public function set(string $key, $value): void
    {
        $this->settings->$key = $value;
    }

    public function get(string $key)
    {
        return property_exists($this->settings, $key) ? $this->settings->$key : null;
    }

    public function remove(string $key): void
    {
        if (property_exists($this->settings, $key)) {
            unset($this->settings->$key);
        }
    }

    public function has(string $key): bool
    {
        return property_exists($this->settings, $key);
    }

    public function clear(): void
    {
        $this->settings = new stdClass();
    }

    public function loadFromFile(string $filename): void
    {
        if (!file_exists($filename)) {
            throw new Exception("File '$filename' does not exist.");
        }

        $json = file_get_contents($filename);
        $data = json_decode($json);

        if ($data === null) {
            throw new Exception("Invalid JSON format in file '$filename'.");
        }

        foreach ($data as $key => $value) {
            $this->settings->$key = $value;
        }
    }

    public function saveToFile(string $filename): void
    {
        $json = json_encode($this->settings, JSON_PRETTY_PRINT);

        if ($json === false) {
            throw new Exception("Error encoding JSON data.");
        }

        file_put_contents($filename, $json);
    }
}

// Example usage
$config = new Config();
$config->set('name', 'John');
$config->set('age', 25);
$config->set('email', 'john@example.com');
echo $config->get('name') . PHP_EOL; // John
$config->remove('age');
var_dump($config->has('age')); // bool(false)
$config->clear();
$config->loadFromFile('config.json');
$config->set('email', 'jane@example.com');
$config->saveToFile('config.json');
