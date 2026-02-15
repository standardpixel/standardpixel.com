---
layout: post
title: "Zsh tooling to get closer to the promise of agents"
date: 2026-02-14 10:00:00 -0800
---

I've automated my dev workflow with a zsh function that ties together git worktrees + Linear + Claude Code. One command now: parses Linear ticket from branch name → creates worktree → auto-claims ticket via GraphQL → copies dev assets (node_modules, .env, etc) → opens Claude Code and Zed.

I can tackle 1-3 bug fix, prototype, or otherwise simple tasks concurrently (sometimes up to 5 for straightforward work). After months of working with this I realized opening Zed automatically was just a security blanket. Removed it from the automation - now I only launch it with `!zed .` from Claude's prompt when actually needed.

This lets me keep all concurrent worktrees visible on screen. It can be draining to context-switch between multiple AI-assisted tasks. The tricky part is predicting which tasks work well in this "AI batch mode" vs requiring traditional focused coding. Some tickets that look simple need deep architectural thinking, while complex-seeming ones are just tedious work Claude handles beautifully.

Still learning how to describe and categorize work by AI-suitability rather than just complexity and communicate this to stakeholders.
