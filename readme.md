Commands:

`robo alias --tag-example="i should echo on the screen"`

Should output the same as `robo example --tag-example="i should echo on the screen"`

Which is: `Success! tag-example:i should echo on the screen` but instead it outputs:

```

  [Symfony\Component\Console\Exception\RuntimeException]
  The "--tag-example" option does not exist.


alias <y>

```
