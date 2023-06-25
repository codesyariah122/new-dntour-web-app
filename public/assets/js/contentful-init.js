let client = contentful.createClient({
  space: 'hm3eztweb2rs',
  accessToken: 'Ja5jwDNyj2buGBSyQpO3MLiiigOs8ayyo8V6wWt5EL4',
});

async function getBlogContent() {
  try {
    if (!client) return 0;
    const response = await client.getEntries({
      content_type: "news",
      order: "-sys.createdAt",
      limit: 100,
    });
    if (response.items.length > 0) return  response.items;
  } catch (err) {
    console.error(err);
  }
}

