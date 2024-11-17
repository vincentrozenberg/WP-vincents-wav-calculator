# Vincent's WAV Recording Time Calculator WordPress Plugin

A WordPress plugin that provides a calculator for determining WAV recording time based on storage capacity and audio settings. This tool helps audio professionals and enthusiasts calculate recording duration for their WAV files based on various technical parameters.
<img width="963" alt="image" src="https://github.com/user-attachments/assets/4fe4a930-39c0-481c-8e42-9ea1627376aa">


**[Live Demo](https://vincentrozenberg.com/wav-calculator/)**

## Features

- Calculate recording time based on:
  - SD Card/Storage size (GB)
  - Sample rate (48 kHz, 96 kHz, 192 kHz)
  - Bit depth (16-bit, 24-bit, 32-bit)
  - Unlimited number of tracks
- Real-time calculations
- Displays:
  - Total recording time
  - Data rate (Kbps and Mbps)
  - Storage required per hour
- Responsive design with dark mode support
- Clean, professional interface

## Installation

1. **[Download](https://github.com/vincentrozenberg/WP-vincents-wav-calculator/archive/refs/heads/main.zip/)** the plugin files
2. Upload the plugin folder to the `/wp-content/plugins/` directory, or upload the zip file via WordPress admin panel > Plugins > Add New > Upload Plugin
3. Activate the plugin through the 'Plugins' menu in WordPress

## Usage

Add the calculator to any post or page using the shortcode:

```
[wav_calculator]
```

## Technical Details

The calculator takes into account:
- Storage capacity in gigabytes (GB)
- Sample rates: 48 kHz, 96 kHz, 192 kHz
- Bit depths: 16-bit, 24-bit, 32-bit
- Multi-track support with no upper limit

Calculations are performed using the following formula:
- Total bytes = Card size in GB * 1,000,000,000
- Bytes per second = (Sample rate * 1000) * (Bit depth / 8) * Number of tracks
- Total seconds = Total bytes / Bytes per second

The calculator provides real-time updates and includes data rate calculations in both Kbps and Mbps, as well as storage requirements per hour of recording.

## Requirements

- WordPress 5.0 or higher
- PHP 7.0 or higher

## License

This project is licensed under the MIT License.

## Author

Created by Vincent Rozenberg
- Website: [vincentrozenberg.com](https://vincentrozenberg.com)

## Notes

- Storage cards typically have slightly less usable space than their advertised capacity due to file system overhead
- The calculator assumes uncompressed WAV format
- Calculations are theoretical and may vary slightly in real-world usage
