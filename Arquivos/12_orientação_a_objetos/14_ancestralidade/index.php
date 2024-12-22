<?php

class Humano {

}

class Animal {

}

class Professor extends Humano {

}

$marcos = new Humano;

$turca = new Animal;

if($marcos instanceof Humano) {
    echo "Marcos é humano <br>";
}
else {
    echo "Marcos não é humano <br>";
}

if($turca instanceof Humano) {
    echo "turca é humano <br>";
}
else {
    echo "turca não é humano <br>";
}

$pedro = new Professor;

if($pedro instanceof Professor) {
    echo "Pedro é professor <br>";
}
else {
    echo "Pedro não é professor <br>";
}

if($pedro instanceof Humano) {
    echo "pedro é humano <br>";
}
else {
    echo "pedro não é humano <br>";
}

if($turca instanceof Professor) {
    echo "turca é professor <br>";
}
else {
    echo "turca não é professor <br>";
}