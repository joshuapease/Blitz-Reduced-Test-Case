## Overview
This project is set up to use DDEV.

The `.env` file is tracked by Git with the appropriate DDEV configuration.

## Steps to Reproduce
- In your `.env` file, set `CRAFT_ENVIRONMENT` to `production`
- Add an image to a `people` entry
- Load the home page of the site `/` - `/templates/index.twig`
- View source and check the `Cached by Blitz` timestamp at the bottom of the page.
- Replace the asset or rename the title of the image.
- See if the `Cached by Blitz` timestamp has changed.

## Turn off eager loading of the profileImage

Commenting out the `with` clause in `/templates/index.twig` seems to resolve this issue.