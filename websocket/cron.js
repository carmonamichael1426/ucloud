const cron = require("node-cron");
const { exec } = require("child_process");

const php = '"C:\\laragon\\bin\\php\\php-7.4.19-Win32-vc15-x64\\php.exe"';
const base = "C:\\laragon\\www\\ucloud\\app\\tasks\\";

// Helper
function run(script) {
  exec(`${php} ${base}${script}`, (err, stdout, stderr) => {
    if (err) {
      console.error(`Error: ${script}`, err);
    } else {
      console.log(`Ran: ${script}`);
    }
  });
}

// Every 5 minutes
cron.schedule("*/5 * * * *", () => {
  run("process_file_queue.cron.php");
});

// Every hour
cron.schedule("0 * * * *", () => {
  run("delete_redundant_files.cron.php");
});

// Daily 12 AM
cron.schedule("0 0 * * *", () => {
  run("auto_prune.cron.php");
  run("create_internal_notifications.cron.php");
  run("downgrade_accounts.cron.php");
});

// Daily 1 AM
cron.schedule("0 1 * * *", () => {
  run("create_email_notifications.cron.php");
});

console.log("uCloud cron running...");
