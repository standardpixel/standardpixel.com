---
layout: post
title: "Rolling my own bot for fun and ~not getting hacked~"
date: 2026-02-26 10:00:00 -0800
---

There was a moment a few weeks ago when I was reading about OpenClaw and wondered if this was a moment like when I first learned about Claude Code. It wasn't. I kept watching to see what I was missing. Here was this open source project with a hundred thousand GitHub stars, people saying it cleared their inbox, booked their flights, fought their insurance company. Yet, all sorts of people were blogging, LinkedIn-ing (is that a thing?), and generally talking about it. I heard it mentioned in NY Times and Verge podcasts.

Then I read a [Cisco blog post about its security risks](https://blogs.cisco.com/ai/personal-ai-agents-like-openclaw-are-a-security-nightmare).

A third-party skill in the OpenClaw ecosystem was quietly exfiltrating data and running prompt injection attacks on its users. Not theoretical. Not a proof of concept. It was doing it. And the skill marketplace had no meaningful vetting process to stop it from happening again.

That made me slow down and think about what OpenClaw is. It is an agent with shell access, browser control, and the ability to send email on your behalf, running on a loop, connected to a community-maintained skill library (.md prompt files) you did not write and probably have not read. That is a lot of trust to extend to a project that is, at the time of this writing, a few months old. I think this was a cool thing to have built and shared. The AI wakes up and acts without being prompted? genuinely interesting. But interesting and ready to run on my machine with access to my accounts are two different things.

So what is here that I can't roll on my own? A lot if I needed everything it does. But I don't and likely nobody needs everything it does.

So here is what I decided to build…

The stack is not exotic. A Slack Bolt app handles the interface. I already live in Slack, so there is no new surface to learn. It's on my phone and my desktop. LM Studio runs a local model (OpenAI GPT OSS 20b is my go-to), which means nothing leaves my machine. A set of tools I wrote myself covers the things I actually need: summarizing my email, checking my calendar, updating a task list, flipping a few switches in the Home App. Cron jobs handle the proactive piece. The AI sends me a morning briefing, monitors a few things I care about, nudges me when something needs attention. Obsidian, which I was already using, acts as the memory layer. Context gets written out as Markdown files the same way I was already taking notes.

The whole thing took a weekend to get working and another weekend to get working well. Claude wrote a lot of it.

What I gave up compared to OpenClaw is a lot I guess. I do not have fifty integrations. I cannot talk to it over WhatsApp (but I only use that to talk to the school parents group anyway). The skills marketplace is just me, adding tools when I need them. For some people that trade-off would not be worth it. If you want a robot assistant that can do almost anything out of the box, OpenClaw is probably right for you and you should read their security documentation carefully before you set it up.

But I do not need fifty integrations. I need maybe eight. And the eight I have, I understand completely. I know exactly what they can do and what they cannot. There is no surface in my setup for a malicious skill to land on because there is no skill marketplace. The blast radius of something going wrong is small and I can see it clearly.

If you want to do something similar, the pieces are all there. Slack Bolt, LM Studio, cron, and whatever note-taking app you already use as a memory layer. The interesting part is not the plumbing. The interesting part is deciding what you actually want it to do. You also get to do a fun project.
