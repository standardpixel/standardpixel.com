---
layout: post
title: "Organic music discovery"
date: 2026-02-23 10:00:00 -0800
---

There was a time in my life when I went to a lot of shows. Not just to see the headliner, the whole night. I would show up early enough to catch whoever was opening, because that was how you found new music. You liked a band, you went to see them, and you walked out having discovered two more. Sometimes I wouldn't make it to see the headliner because I was satisfied with the show. I remember that happening when I discovered the band Minus the Bear. I was so happy with their performance opening that I just went home afterwords.

That doesn't happen as much for me now. I still love music, but I just don't have time to get out to shows these days. So I end up relying on KCRW (which is excellent if you don't listen to them) and streaming recommendations (which are fine). I miss that feeling of finding a small local unsigned (possibly not even on Apple Music yet) band who managed to get on the bill with a band who is signed.

So I built [bands.standardpixel.com](https://bands.standardpixel.com).

Give it a band or artist name and it maps out the bands they have shared a bill with. The theory is: independent bands have more say in who they tour with. When a festival organizer books around an artist you love, they are making a curatorial choice. These are human decisions, not statistical ones. Not better, but different. Another way of finding.

It is not perfect. Plenty of bands end up on the same bill for reasons that have nothing to do with sound. But, I can't promise it will be better than going to shows for finding bands.

Under the hood it is built with Next.js and pulls data from MusicBrainz, which is a gem of a data source. When you search for an artist, a Python script queries the MusicBrainz API to find touring relationships, then caches the results in PostgreSQL so you are not waiting two minutes every time someone searches for a band. A WebSocket connection gives you real-time progress while it works, which felt important because the first version just sat there silently and it was unnerving.

The results come back as a network graph you can explore, with Apple Music players embedded so you can listen immediately to what you find (if they are on there). Each artist gets a shareable URL so if you find something good you can pass it along.
