var data = [
  { type: "Foo", year: 1995 },
  { type: "Bar", year: 1993 },
  { type: "Foobar", year: 2020 },
];
// Buatlah sebuah function untuk sorting berdasarkan year ASC.

function sortArrayOfObjects(a, b) {
  const tmpA = a.year;
  const tmpB = b.year;

  return tmpA > tmpB ? 1 : -1;
}

// Usage
data.sort(sortArrayOfObjects);

// tested
var data = [
  { type: "Foo", year: 1995 },
  { type: "Bar", year: 1993 },
  { type: "Foobar", year: 2020 },
  { type: "Foobar", year: 1555 },
  { type: "Foobar", year: 1212 },
];
