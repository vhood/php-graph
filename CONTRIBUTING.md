# Contributing

Anyone can implement unfinished features from `README.md`.

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

### Git commits

Each commit should contain only a one-line commit message.

The message must match the following template, or match more than one such template, separated by `;`.

```text
<type>(<scope>): <summary>
  │       │             │
  │       │             └─⫸ Summary in present tense. Not capitalized. No period at the end.
  │       │
  │       └─⫸ Commit Scope: one of AL, MP, NS, HT
  │
  └─⫸ Commit Type: env|doc|feat|fix|perf|refactor
```

The `<type>` and `<summary>` fields are mandatory, the `(<scope>)` field is optional.

The `<type>` must be one of the following:

- **env**: Changes that affect project environment, like CI/CD files, dependencies, settings, Dockerfile e.t.c.
- **doc**: Documentation only changes
- **feat**: A new feature
- **fix**: A bug fix
- **perf**: A code change that improves performance
- **refactor**: A code change that neither fixes a bug nor adds a feature

The `(<scope>)` should be the tag of the graph type affected:

- **AL** - Adjacency List
- **MP** - Materialized Path
- **NS** - Nested Set
- **HT** - Hash Table

Use the summary field to provide a succinct description of the change:

- use the imperative, present tense: "change" not "changed" nor "changes"
- don't capitalize the first letter
- no dot (.) at the end
