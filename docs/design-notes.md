# Portfolio design direction

The audience is prospective collaborators and employers. The homepage leads with Sonu’s identity, then actual projects, background, capabilities, and a way to get in touch. Project descriptions come from the existing portfolio and public GitHub repositories; there are no invented clients, awards, or experience claims. Project artwork is an illustrative preview, labeled as such.

## System

- Cool white `#f7f8fc`, navy `#111a32`, cobalt `#244de8`, muted slate `#596276`, lavender gray `#eef0f9`, and midnight `#111b38`.
- Space Grotesk for headings and DM Sans for reading. Fonts are self-hosted, with their OFL licenses in `assets/fonts`.
- Wide, aligned content; restrained borders; generous space; consistent link and button feedback. No external runtime libraries, font requests, or animation CDNs.
- A coordinated hero entrance and CSS orbital sculpture carry the motion. Pointer movement subtly offsets the sculpture; project previews respond to interaction. Animation pauses offscreen and when the document is hidden. A visible pause button and the OS reduced-motion preference disable decorative motion.
- Native disclosure controls keep the toolkit concise. Contact fields have labels, inline errors, a focusable linked error summary, loading feedback, and success only after the server confirms a database write.

## Research used

The publicly available [UI/UX Pro Max skill](https://github.com/nextlevelbuilder/ui-ux-pro-max-skill/blob/main/.claude/skills/ui-ux-pro-max/SKILL.md) was searched for `personal portfolio creative`, reduced-motion animation, and validation feedback. The portfolio result informed monochrome plus blue, generous space, and a readable narrative. Its accessibility guidance informed contrast, keyboard focus, responsive checks, meaningful labels, and motion controls. Recommendations were adapted to a plain PHP/CSS/JavaScript website rather than installing a framework.

[Anthropic’s frontend-design guidance](https://github.com/anthropics/skills/blob/main/skills/frontend-design/SKILL.md) informed deliberate typography, a single memorable focal point, and visual review through screenshots.

These are design references, not third-party executable dependencies. Live web searches through DuckDuckGo, W3C, web.dev, and Nielsen Norman Group were blocked by the environment; the public GitHub sources above were accessible and actually read.
