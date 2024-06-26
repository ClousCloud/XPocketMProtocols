<?php

namespace xpocketmc\xpocketmprotocols;

class Minecraft {
    private string $version;
    private int $protocol;

    public function __construct(string $version, int $protocol) {
        $this->version = $version;
        $this->protocol = $protocol;
    }

    public function getVersion() : string {
        return $this->version;
    }

    public function getProtocol() : int {
        return $this->protocol;
    }

    public function setVersion(string $version): void {
        $this->version = $version;
    }

    public function setProtocol(int $protocol): void {
        $this->protocol = $protocol;
    }

    public function isCompatible() : bool {
        return $this->protocol === Protocol::getCurrentProtocol() && $this->version === Protocol::getMinecraftVersion();
    }

    public function displayInfo() : string {
        return "Minecraft Version: " . $this->version . ", Protocol: " . $this->protocol;
    }

    public function validateConnection() : bool {
        return Protocol::isValidProtocol($this->protocol) && Protocol::isValidMinecraftVersion($this->version);
    }

    public function updateVersionAndProtocol(string $version, int $protocol): void {
        $this->setVersion($version);
        $this->setProtocol($protocol);
    }
}

?>
