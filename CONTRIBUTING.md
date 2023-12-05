# Contributing

Anyone can implement unfinished features from `README.md`, which are not in the `in progress` status (at github projects).

## Setup

Requirements:

- Docker
- Make

Setup steps:

1. download the project
2. copy `.env.template` to `.env` (you can use `make environments`) and set the docker image name there
3. build the image `make build`
4. run the image (`make run`) and project tests (`make test`)

## Rules

The code should match the [elegant-php/doctrine](https://github.com/elegant-php/doctrine)
and the [elegant-php/code-style](https://github.com/elegant-php/code-style)
