#! /usr/bin/env bash

function index()
{
    echo "Starting browser..."

    firefox --private-window http://www.students.com &
}

index