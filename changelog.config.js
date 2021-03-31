module.exports = {
    disableEmoji: false,
    list: [
      'feat',
      'fix',
      'refactor',
      'style',
      'ci',
      'chore'
    ],
    maxMessageLength: 64,
    minMessageLength: 3,
    questions: [
      'type',
      'scope',
      'subject',
      'body',
      'breaking'
    ],
    types: {
      feat: {
        description: 'A new feature',
        emoji: '🚀',
        value: 'feat'
      },
      fix: {
        description: 'A bug fix',
        emoji: '🐛',
        value: 'fix'
      },
      refactor: {
        description: 'A code change that neither fixes a bug or adds a feature',
        emoji: '💡',
        value: 'refactor'
      },
      style: {
        description: 'Markup, white-space, formatting, missing semi-colons...',
        emoji: '🧁',
        value: 'style'
      },
      ci: {
        description: 'CI/CD related changes',
        emoji: '👷',
        value: 'ci'
      },
      chore: {
        description: 'Build process or auxiliary tool changes',
        emoji: '🧰',
        value: 'chore'
      }
    }
  }
  