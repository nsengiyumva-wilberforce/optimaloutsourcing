import { jsPDF } from 'jspdf';

// Your jsPDF code goes here
const doc = new jsPDF();
doc.text('Hello, World!', 10, 10);
doc.save('sample.pdf');
