import { NextResponse } from "next/server";
import { getSession } from "@/lib/session";
import { verifyCredentials } from "@/lib/users";

export async function POST(request: Request) {
  const formData = await request.formData();
  const username = String(formData.get("username") ?? "");
  const password = String(formData.get("password") ?? "");

  if (!verifyCredentials(username, password)) {
    return NextResponse.redirect(new URL("/login?error=1", request.url), 303);
  }

  const session = await getSession();
  session.username = username.toLowerCase().trim();
  session.loggedAt = Date.now();
  await session.save();

  return NextResponse.redirect(new URL("/", request.url), 303);
}
