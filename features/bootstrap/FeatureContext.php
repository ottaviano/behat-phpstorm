<?php

class FeatureContext implements \Behat\Behat\Context\Context
{
    /**
     * @Given it will passed!
     */
    public function itSTrue()
    {
        return true;
    }
}
