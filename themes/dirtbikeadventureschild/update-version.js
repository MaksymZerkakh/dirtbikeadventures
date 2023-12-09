const fs = require('fs');

function incrementVersion(version) {
  const parts = version.split('.');
  let major = parseInt(parts[0]);
  let minor = parseInt(parts[1]);
  let patch = parseInt(parts[2]);

  if (patch < 99) {
    patch++;
  } else if (minor < 99) {
    minor++;
    patch = 0;
  } else {
    major++;
    minor = 0;
    patch = 0;
  }

  return `${major}.${minor}.${patch}`;
}

// Read the functions.php file
fs.readFile('functions.php', 'utf8', (err, data) => {
  if (err) {
    console.error(err);
    return;
  }

  // Regular expression to find and update the version number in functions.php
  const regex = /(wp_enqueue_style\s*\(\s*'child-style',\s*get_stylesheet_directory_uri\s*\(\s*\)\s*\.\s*'\/dist\/css\/style\.min\.css',\s*array\s*\(\s*\),\s*)'([\d.]+)'\s*\);/g;

  const updatedContent = data.replace(regex, (match, prefix, currentVersion) => {
    const newVersion = incrementVersion(currentVersion);
    return `${prefix}'${newVersion}');`;
  });

  if (updatedContent === data) {
    console.error("Unable to find the current version in functions.php");
    return;
  }

  // Write the updated content back to functions.php
  fs.writeFile('functions.php', updatedContent, 'utf8', (err) => {
    if (err) {
      console.error(err);
      return;
    }
    console.log(`Version updated successfully in functions.php!`);
  });
});
