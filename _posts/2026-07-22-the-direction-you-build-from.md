---
layout: post
title: "The Direction You Build From"
date: 2026-07-22 10:00:00 -0800
---

I have been interviewing lately, which means I have spent a lot of time trying to describe what I do.

You would think that gets easier the longer you do it. It has not. The words I have been handed are front end and back end, and the more I use them the less I trust them. They were good words. They described a real thing at a specific moment, when the browser was one job and the server was another job and you could tell which one you had by looking at what was open on your screen. That moment is over, and we kept the vocabulary anyway.

Here is the pattern I keep running into. A company tells me they are having a hard time hiring. What they are looking for, they say, is someone who can do UX polish, someone who works well with product and design, someone who can take a rough idea and make it feel like a real thing. They tell me my background is exactly what they have been missing. Then I get to the technical screen and it is data structures and algorithms.

I do not think anyone is being dishonest. I think they know what they need and they do not have a way to test for it, so they test for the thing that has a rubric. And the thing with a rubric tends to select for a different kind of engineer than the one they described in the first paragraph of the job post.

So the distinction has not gone away. We just lost the words for it.

## Which end you start from

Here is where I have landed, at least for now.

There are two kinds of engineers, and they sit on either side of a continuum rather than in two buckets. Some engineers start at the systems and build toward the interface. Some start at the interface, or at product and design, and build toward the systems. Almost everybody does both eventually. The difference is where you start, and where you go back to when the problem gets hard.

I am the second kind. I have been the second kind for a long time and I did not have a clean way to say so.

We used to gesture at this with other language. Ten years ago people talked about outcome driven development, as opposed to the kind of work where you are worried about how every line is performing. That was pointed at the same thing, I think, and it was not always attached to front end and back end. But the more I look at it the more those two conversations seem like the same conversation.

## What it looked like at Flickr and Slack

At Flickr, the most cohesive team I worked on was the front end team. That surprised me at the time. We had genuinely excellent back end engineers doing hard, impressive work. But the energy was on the front end, and I think the reason is that the work started from a hypothesis about what someone would want. We would build backwards from that. Prototype first, then whatever API the prototype needed, and only once the thing had proven itself would we build the system that made it hold up. It was not that the systems work mattered less. It came second on purpose.

Slack is the better example, partly because it is more recent and partly because I got to see both halves of the cycle.

Slack was founded by a lot of the same people, and from the outside it looks like the same approach. Years of careful, incremental, interface driven work figuring out what the product actually was. That is not a phase you can skip and it is not a phase you can rush. At some point that work succeeded enough that it created a systems problem, and the company had to stop and turn around.

By the time I was hired, the goal was moving from tens of thousands of users per team to hundreds of thousands, because that is what the large contracts required. The back end was practically rewritten. That was enormous work by very pragmatic and very mighty engineers, and it is worth saying plainly that it was work created by the success of everything that came before it. You do not need that kind of scale until the interface driven years have earned it.

And then it turned back around again. Right before I arrived they had built a front end framework called Gantry, which existed so the interface could take advantage of all that new back end capacity. It was a joy to work with. It was also only possible because of the scale work, which was only necessary because of the UX work, which is the part I want to sit on for a second.

This is not a tension. It is a cycle. Each direction hands the next one something it could not have made on its own.

## The reason I am thinking about this now

I would probably have let this sit as a private theory if it were not for what has happened in the last couple of years.

When I am orchestrating the Claude SDK, or the OpenAI SDK, or the Vercel AI SDK, I am writing code that would have been filed under back end without much argument. There is no browser in it. But it does not feel like systems work. It feels like interface work wearing different clothes. You are making decisions about what someone will experience, in what order, with what sense of control, and how it should behave when it goes wrong. The old category says one thing and the actual work says another.

That is the clearest sign I have seen that the vocabulary has come loose.

It also seems to explain some of what has happened in this AI era. My honest read is that Anthropic nailed the user experience in a way nobody else did, and Claude Code is the sharpest example of it. I do not think you get there by starting with the capability and looking for somewhere to put it. I think you get there by starting with how someone would actually want to use the thing and working back. Claude Code was built by an engineer, for an engineer. I believe that is why it is the strongest example of a successful AI era product. When the person building it is the person who needs it, there is no gap to close. It was born from fully understanding the user need, and it has spent the past year scaling to realize the promise of its initial theory.

## Both directions win

I want to be careful here, because it would be easy to read this as an argument that one kind of engineer is better. It is not.

My outside understanding of Apple is that they have almost always worked from the user inward. They have not necessarily invented the most technology. They adopt it, and then they iterate on the experience until it is theirs. Google looks like the other direction to me. Enormous systems problems nobody had solved, solved well enough that other people could build good interfaces on top of them.

Both of those companies are extraordinarily successful and they started from opposite ends. They also need each other more than either would probably like to admit.

Which brings me to the thing I cannot stop thinking about. The beta version of Siri, as I understand it, is running on Google's Gemini underneath. We do not know yet how that turns out. But it is a very clean illustration of the point. Apple did not need to build the model to build the experience. Their bet is that knowing what matters to the person holding the phone, and orchestrating the right systems to deliver it, is the part that is hard to copy.

I would not bet against that, only because it is the thing Apple has historically been best at, in the same way that scalable systems are the thing Google has historically been best at.

## I do not have the words yet

I want to be clear that I am not proposing terminology here. I do not have it. User driven and systems driven are the closest I have gotten and I am not satisfied with either one, partly because they both sound like a value judgment and neither is meant to be.

What I am fairly confident about is that the distinction is real, that it survived the thing that made the old words obsolete, and that we are currently building teams and running interviews with vocabulary that predates most of what we are actually building.

If you have better words for it, send them my way, friends.
