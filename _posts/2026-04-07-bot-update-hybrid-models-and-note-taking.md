---
layout: post
title: "Bot update: Hybrid models and passive note-taking"
date: 2026-04-07 10:00:00 -0800
---

Small update on my post about [rolling my own bot](https://standardpixel.com/blog/2026/02/26/rolling-my-own-bot.html) using Slack Bolt, the OpenAI SDK, and LM Studio running GPT-OSS-20b locally. It's worked pretty well but I started noticing where GPT-OSS-20b falls short.

It is fine for simple retrieval. Ask it to pull something from my calendar or summarize a specific email thread and it does the job. But ask it to do something that requires nuance or anything with multiple steps and it fell apart. The most obvious example was note-taking. I wanted to be able to throw a quick thought at it throughout the day and have it filed appropriately in my [PARA-organized](https://fortelabs.com/blog/para/) Obsidian vault. GPT-OSS-20b would consistently put things in the wrong place, create duplicate notes, or just fail to understand what I was asking it to do. I ended up coming around to the fact that I need a hosted model like Claude Sonnet.

I added a model switcher. Now the bot can use my local LM Studio models and the latest Anthropic models depending on what I select. Simple retrieval and basic actions like archiving a folder or creating a note in a specific project? That stays local with GPT-OSS-20b. Anything that requires understanding context, making decisions about where something belongs, or creating new structure? That gets routed to Claude.

The more interesting change was updating the base prompt to treat anything that is not a question as a note. If I send it a sentence fragment, a thought, a link with a quick comment, it assumes I want it logged. Throughout the day I can just drop things into Slack and the bot breaks them down into the appropriate notes in my vault. It can create new notes as needed. If I mention a person by first name, it matches them to the most recent person with that first name in my vault. It is not perfect but it is close enough that I use it constantly now. I also capture a lot more.
