<?php

class PluginTest extends TestCase
{
    public function test_plugin_installed() {
        activate_plugin( 'disciple-tools-strategy/disciple-tools-strategy.php' );

        $this->assertContains(
            'disciple-tools-strategy/disciple-tools-strategy.php',
            get_option( 'active_plugins' )
        );
    }
}
