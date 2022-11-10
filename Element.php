<?php

class Element {

    private string $name;
    private Element $beats;
    private Element $secondElement;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function getName() : string {
        return $this->name;
    }

    public function getBeats(): Element{
        return $this->beats;
    }

    public function getSecondElement(): Element {
        return $this->secondElement;
    }

    public function setSecondElement(Element $secondElement): void {
        $this->secondElement = $secondElement;
    }


    public function setBeats(Element $element): void {
        $this->beats = $element;

    }


}
