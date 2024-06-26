<?php

namespace xpocketmc\xpocketmprotocols;

class Protocol {
    const CURRENT_PROTOCOL = 575;
    const MINECRAFT_VERSION = "1.21.0";

    public static function getCurrentProtocol() : int {
        return self::CURRENT_PROTOCOL;
    }

    public static function getMinecraftVersion() : string {
        return self::MINECRAFT_VERSION;
    }

    public static function isValidProtocol(int $protocol) : bool {
        return $protocol === self::CURRENT_PROTOCOL;
    }

    public static function isValidMinecraftVersion(string $version) : bool {
        return $version === self::MINECRAFT_VERSION;
    }

    /**
     * @param array<mixed> $data
     * @return array<mixed>
     */
    public static function parseData(array $data) : array {
        return $data;
    }

    /**
     * @param array<mixed> $data
     * @return array<mixed>
     */
    public static function createPacket(array $data) : array {
        return $data;
    }

    /**
     * @return array<string, mixed>
     */
    public static function getProtocolInfo() : array {
        return [
            'protocol' => self::CURRENT_PROTOCOL,
            'version' => self::MINECRAFT_VERSION
        ];
    }

    public static function protocolToString() : string {
        return "Protocol: " . self::CURRENT_PROTOCOL . ", Version: " . self::MINECRAFT_VERSION;
    }
}

$minecraft = new Minecraft(Protocol::getMinecraftVersion(), Protocol::getCurrentProtocol());
echo $minecraft->displayInfo();

?>
