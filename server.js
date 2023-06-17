import dotenv from 'dotenv';
import { fileURLToPath } from 'url';
import { dirname } from 'path';
import express from 'express';
import crypto from 'crypto';
import twilio from 'twilio';

dotenv.config();

const __filename = fileURLToPath(import.meta.url);
const __dirname = dirname(__filename);
const app = express();
const port = 5000;

// Start the Express server
app.listen(port, async () => {
  console.log(`Express server running on port ${port}`);
});
